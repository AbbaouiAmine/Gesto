<?php
 namespace UserBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\User;

class LoadUser implements ORMFixtureInterface
{
    public function load(ObjectManager $manager)
    {
      // Liste des noms de catégorie à ajouter
      $_users = array(
          "username" => "user",
          "password" => "pass"
      );
      
      for ($i=0;$i<5;$i++) {
        
        $user = new User();
        $user->setUsername($_users["username"].$i);
        $user->setPassword($_users["password"].$i);
        $user->setSalt('');
        $user->setRoles(array('ROLE_USER'));
        $manager->persist($user);
      }
  
      // On déclenche l'enregistrement de toutes les catégories
      $manager->flush();
    }
  
}
