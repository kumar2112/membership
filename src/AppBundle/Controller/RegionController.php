<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Region;

class RegionController extends Controller
{
      public function addAction(Request $request){
          $error=array();
          if ($request->getMethod() == 'POST') {
                $em = $this->getDoctrine()->getManager();
                $region=new Region();
                $name=$request->request->get('region_name');
                $maxmembers=$request->request->get('region_max_members');
                //$maxmembersMatch='/^[0-9]$/';
                // if(empty($maxmembersMatch)){
                //    $error['maxmembers']="Mandatory Field";
                // }else if(!preg_match($maxmembersMatch,$cnp,$match)){
                //     $error['maxmembers']="Please enter a number";
                // }
                //if(empty($error)){
                    $region->setName($name);
                    $region->setMaxmembers($maxmembers);
                    $em->persist($region);
                    $em->flush();

                //}
          }

          return $this->render('AppBundle:Region:add.html.twig',array(
              'error'=>$error
          ));
      }
}
