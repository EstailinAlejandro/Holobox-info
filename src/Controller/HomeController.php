<?php

namespace App\Controller;


use App\Entity\Video;
use App\Form\VideoType;
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
    #[Route('/videos', name: 'showVideos')]
    public function showVideos(Request $request, EntityManagerInterface $entityManager): Response
    {
        $objects = $entityManager->getRepository(Video::class)->findAll();

        return $this->render('home/select.html.twig', [
            'files' => $objects
        ]);
    }
}
