<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

class Diviseur {
    public function division(int $index, int $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];

        if ( $index > 9) {
            throw new Erreur("Votre index doit être inferieur 9 ");
        }
        elseif ($index < 0){
            throw new Erreur("Votre index doit être superieur à 0 ");
        }
        if ($diviseur === 0){
            throw new Erreur("Votre diviseur doit être different de 0 ");

        }
        return $valeurs[$index] / $diviseur;
    }
}
class Erreur extends \Exception{}

do{
    try{

        $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
        $index = $input->prompt();

        $input = $climate->input("Entrez le diviseur : ");
        $diviseur = $input->prompt();

        $result =  (new Diviseur())->division($index, $diviseur);

        $climate->output("Le résultat de la division est : " . $result);
    }catch(Erreur $e)
    {
        echo $e->getMessage();
    }
    catch(\TypeError $e){
        echo "Vous n'avez pas entré un entier ";
    }
    catch(\Throwable $e)
    {
        echo "Erreur inconnue : " . $e->getMessage();
    }
      
}while(!isset($result));
