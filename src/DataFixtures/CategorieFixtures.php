<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $categorie = new Categorie();
        $categorie->setLibelle("Professionnel");
        $categorie->setImage("https://picsum.photos/id/5/200/300");
        $categorie->setDescription(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu condimentum nunc. Suspendisse potenti. Maecenas eget feugiat orci. Sed dignissim orci eu varius vestibulum. Integer mi tortor, pretium ut facilisis et, imperdiet eget elit. Mauris vitae eleifend nulla. Nullam quis vestibulum eros. Proin ac consectetur massa. Donec sed varius ante. Vestibulum tempor metus et risus lobortis, placerat tincidunt risus sollicitudin. Integer id urna eros. ");
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setLibelle("Privé");
        $categorie->setImage("https://picsum.photos/id/342/200/300");
        $categorie->setDescription(" Mauris ultricies nisl at eleifend commodo. Ut massa justo, consectetur vitae ex a, tristique varius risus. Mauris finibus euismod dapibus. Duis porttitor leo eget condimentum dignissim. Sed blandit nibh non ex auctor mollis. Curabitur lobortis viverra metus, ut congue ex egestas non. Fusce viverra at purus nec sodales. Vestibulum laoreet ultricies auctor. Duis quis pharetra nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ac pretium libero. Suspendisse sapien justo, feugiat et lectus quis, elementum viverra turpis. Maecenas at molestie urna, quis tempor mi. ");
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setLibelle("Sport");
        $categorie->setImage("https://picsum.photos/id/73/200/300");
        $categorie->setDescription(" Duis vel luctus tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque non tellus eget orci tempus dictum eget nec odio. Proin tempus, turpis at mattis interdum, risus justo dignissim metus, ut gravida orci nibh nec arcu. Vivamus porttitor pharetra quam, fringilla dictum arcu condimentum ut. Pellentesque non efficitur massa, a tristique risus. Nullam vitae urna id tellus iaculis elementum. Proin id risus a nulla consectetur ullamcorper. Aliquam consectetur turpis a vehicula varius. Mauris accumsan eros lectus. Nam vestibulum porttitor purus, et tempus est interdum ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Vivamus convallis mi ut eros scelerisque, a convallis ante ultrices. Donec fringilla dictum velit ut eleifend. ");
        $manager->persist($categorie);

        $manager->flush();
    }
}
