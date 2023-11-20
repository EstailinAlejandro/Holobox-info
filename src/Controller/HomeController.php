<?php

namespace App\Controller;


use App\Entity\Video;
use App\Form\VideoType;
use App\Repository\VideoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{


    #[Route('/', name: 'add-video')]
    public function showInsert(Request $request, EntityManagerInterface $em): Response
    {
        $video = $em->getRepository(Video::class)->findAll();
        $add = new Video();
        $form = $this->createForm(VideoType::class, $add);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['filename']->getData();

            $destination = $this->getParameter('kernel.project_dir').'/public/uploads';

            $originalFileName = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFileName = $originalFileName.'-'. uniqid().'.'.$uploadedFile->guessExtension();

            $uploadedFile->move(
                $destination,
                $newFileName
            );

            $add->setFilename($newFileName);

            $em->persist($add);
            $em->flush();

            $this->addFlash(
                'notice',
                'Het item is toegevoegd'
            );

            return $this->redirectToRoute('add-video');
        }

        return $this->renderForm('home/index.html.twig', [
            'form' => $form,
            'video'=> $video,
        ]);
    }

//    #[Route('/delete', name: 'app_delete')]
//    public function deletee(VideoRepository $videoRepository,Video $videos): Response
//    {
//        $videoRepository->remove($videos);
//
//        $videos = $videoRepository->findAll();
//        $this->addFlash('delete','Uw video is verwijderd');
//        return $this->render('home/delete.html.twig', [
//            'files' => $videos
//        ]);
//    }


    #[Route('/delete/{id}', name: 'delete')]
    public function delete(VideoRepository $videoRepository,Video $videos): Response
    {
        $videoRepository->remove($videos);

        $videos = $videoRepository->findAll();
        $this->addFlash('delete','Uw video is verwijderd');
        return $this->render('home/delete.html.twig', [
            'files' => $videos
        ]);
    }

    #[Route('/videos2', name: 'showVideos2')]
    public function showVideos2(Request $request, EntityManagerInterface $entityManager): Response
    {
        $objects = $entityManager->getRepository(Video::class)->findAll();

        return $this->render('home/delete.html.twig', [
            'files' => $objects
        ]);
    }



    #[Route('/videos', name: 'showVideos')]
    public function showVideos(Request $request, EntityManagerInterface $entityManager): Response
    {
        $objects = $entityManager->getRepository(Video::class)->findAll();

        return $this->render('home/select.html.twig', [
            'files' => $objects
        ]);
    }
}
