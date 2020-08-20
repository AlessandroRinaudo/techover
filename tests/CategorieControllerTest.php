<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class CategorieControllerTest extends WebTestCase
{

    /**
     * ce test vérifie que la page afficheé est bien 'catégories'
     */
    public function testPageCategories()
    {
        $client = static ::createClient();
        $client->request('GET', '/categories');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    /**
     * ce test vérifie que le titre de la page catégories est "Toutes les catégories"
     */
    public function testPageCategoriesH2()
    {
        $client = static ::createClient();
        $client->request('GET', '/categories');
        $this->assertSelectorTextContains('h2','Toutes les catégories');
    }

    /**
     * Ce test vérifie que toutes les catégories sont afficheés dans la page
     */
    public function testPageCategoriesPagination()
    {
        $client = static ::createClient();
        $client->request('GET', '/categories');
        $this->assertSelectorTextContains('div','Toutes les catégories');
    }

}