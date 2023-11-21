<?php

namespace App\Controller;


use App\Entity\Video;
use App\Form\VideoType;
use App\Repository\VideoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
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
                'success',
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
        $this->addFlash('danger','Uw video is verwijderd');
        return $this->render('home/delete.html.twig', [
            'files' => $videos
        ]);
    }

    #[Route('/Show1video/{id}', name: 'OnlyVideo')]
    public function OnlyVideo(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        $video = $entityManager->getRepository(Video::class)->find($id);

        if (!$video) {
            throw $this->createNotFoundException('Video not found');
        }

        // Assume Video entity has a method to get the file path, adjust accordingly
        $videoPath = $this->getParameter('kernel.project_dir') . '/public/uploads/' . $video->getFilename();

        // Create a BinaryFileResponse to serve the video
        $response = new BinaryFileResponse($videoPath);
        $response->headers->set('Content-Type', 'video/mp4');

        return $response;
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
