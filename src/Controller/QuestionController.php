<?php


namespace App\Controller;


use App\Entity\Article;
use App\Entity\Users;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;




class QuestionController extends AbstractController
{





    /**
     * @Route ("/", name="home");
     */
    public function homepage(AuthenticationUtils $authenticationUtils):Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('show.html.twig', ['last_username' => $lastUsername, 'error' => $error]);

       // return $this->render('show.html.twig');
    }






    /**
     * @Route("/question", name="question");
     * @Method ({"GET"})
     */
    public function question()
    {
        $doctrine = $this->getDoctrine();
        $articles = $doctrine->getRepository(Article::class);

        $articles = $articles->getArticle(2);
        echo '<pre>';
        var_dump($articles);exit();



    }



    /**
     * @Route("/article/save", name="/article/save")
     */
    public function save()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $article = new Article();
        $article->setTitle('Article sfdsf');
        $article->setBody('this is body fo article seveddadzzv');

        $entityManager->persist($article);
        $entityManager->flush();
        return new Response('Saved new article with id '.$article->getId());
    }







}

