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

    #[Route ('fileupload', name: 'upload_test' )]
    public function temporaryUploadAction(Request $request)
    {
        $uploadedFile =($request->files->get('image'));
        $destination = $this->getParameter('kernel.project_dir').'/public/uploads';

        $originalFileName = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $newFileName = $originalFileName.'-'. uniqid().'.'.$uploadedFile->guessExtension();


        dd($uploadedFile->move(
            $destination,
            $newFileName
        ));


    }
    #[Route('/', name: 'add-video')]
    public function showInsert(Request $request, EntityManagerInterface $em): Response
    {
        $genre = $em->getRepository(Video::class)->findAll();
        $add = new Video();
        $form = $this->createForm(VideoType::class, $add);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($form['filename']->getData());
            $em->persist($add);
            $em->flush();
            $this->addFlash(
                'notice',
                'het item is toegevoegd'
            );
            return $this->redirectToRoute('app_home');

        }

        return $this->renderForm('home/index.html.twig', [
            'form' => $form

        ]);
    }
}
