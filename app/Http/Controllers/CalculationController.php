<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

    public function index(){
        return view('home');
    }

    public function male(){
        return view('male');
    }

    public function malecalculation(Request $request){
        try{
            $wife = $request->wife;
            $wifeq = $request->wifeq;
            $son = $request->son;
            $sonq = $request->sonq;
            $ripson = $request->ripson;
            $ripsonq = $request->ripsonq;
            $daughter = $request->daughter;
            $daughterq = $request->daughterq;
            $ripdaughter = $request->ripdaughter;
            $ripdaughterq = $request->ripdaughterq;
            $father = $request->father;
            $fatherq = $request->fatherq;
            $mother = $request->mother;
            $motherq = $request->motherq;
            $grandpa = $request->grandpa;
            $grandpaq = $request->grandpaq;
            $grandma = $request->grandma;
            $grandmaq = $request->grandmaq;
            $grandmother = $request->grandmother;
            $grandmotherq = $request->grandmotherq;
            $brother = $request->brother;
            $brotherq = $request->brotherq;
            $sister = $request->sister;
            $sisterq = $request->sisterq;
            $brotherson = $request->brotherson;
            $brothersonq = $request->brothersonq;
            $brothersonson = $request->brothersonson;
            $brothersonsonq = $request->brothersonsonq;
            $stepbroM = $request->stepbroM;
            $stepbroMq = $request->stepbroMq;
            $stepbroF = $request->stepbroF;
            $stepbroFq = $request->stepbroFq;
            $stepsisM = $request->stepsisM;
            $stepsisMq = $request->stepsisMq;
            $stepsisF = $request->stepsisF;
            $stepsisFq = $request->stepsisFq;
            $stepbroMson = $request->stepbroMson;
            $stepbroMsonq = $request->stepbroMsonq;
            $stepbroMsonson = $request->stepbroMsonson;
            $stepbroMsonsonq = $request->stepbroMsonsonq;
            $uncle = $request->uncle;
            $uncleq = $request->uncleq;
            $stepuncle = $request->stepuncle;
            $stepuncleq = $request->stepuncleq;
            $cousin = $request->cousin;
            $cousinq = $request->cousinq;
            $stepcousin = $request->stepcousin;
            $stepcousinq = $request->stepcousinq;
            $stepcousinson = $request->stepcousinson;
            $stepcousinsonq = $request->stepcousinsonq;
            $cousinson = $request->cousinson;
            $cousinsonq = $request->cousinsonq;
            $cousinsonson = $request->cousinsonson;
            $cousinsonsonq = $request->cousinsonsonq;
            $stepcousinsonsonq = $request->stepcousinsonson;
            $stepcousinsonson = $request->stepcousinsonsonq;
            $stepcousinsonsonq = $request->stepcousinsonsonq;

            $property = $request->property;
            $gold = $request->gold;
            $silver = $request->silver;
            $money = $request->money;

            $remain=0;
            $stepsisFportion=0;
            $stepbroFportion=0;
            $stepbroMportion=0;
            $stepsisMportion=0;
            $sisterportion=0;
            $grandmaportion=0;
            $grandpaportion=0;
            $motherportion=0;
            $fatherportion=0;
            $ripdaughterportion=0;
            $daughterportion=0;
            $wifeportion=0;
            $brothersonsonportion = 0;
            $brothersonportion = 0;
            $brotherportion = 0;
            $stepcousinsonsonportion = 0;
            $stepcousinsonportion = 0;
            $stepcousinportion = 0;
            $cousinsonsonportion = 0;
            $cousinsonportion = 0;
            $cousinportion = 0;
            $uncleportion = 0;
            $ripsonportion = 0;
            $sonportion = 0;
            $ripsonportion = 0;
            $stepuncleportion=0;
            $stepbroMsonportion=0;
            $stepbroMsonsonportion=0;

            $remain = 1;



            if(isset($wife)){
                if(isset($son) || isset($daughter) || isset($ripson) || isset($ripdaughter)){
                    $wifeportion = round(((1/8)/$wifeq),4);
                }else{
                    $wifeportion = round(((1/4)/$wifeq),4);
                }
                $remain = $remain - $wifeportion;
            }

            if(isset($daughter)){
                if(($daughterq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter)){
                    $daughterportion = round(((1/2)/$daughterq),4);
                    $remain = $remain - ($daughterportion);
                }else if(($daughterq>=1) && is_null($son) && is_null($ripson)){
                    $daughterportion = round(((2/3)/$daughterq),4);
                    $remain = $remain - ($daughterportion);
                }
            }
            if(isset($ripdaughter)){
                if(($ripdaughterq==1) && is_null($son) && is_null($ripson) && is_null($daughter)){
                    $ripdaughterportion = round(((1/2)/$ripdaughterq),4);
                    $remain = $remain - ($ripdaughterportion);
                }else if(($ripdaughterq>=1) && is_null($son) && is_null($ripson) && is_null($daughter)){
                    $ripdaughterportion = round(((2/3)/$ripdaughterq),4);
                    $remain = $remain - ($ripdaughterportion);
                }
            }

            if(isset($father)){
                if(isset($son) || isset($ripson) || ($daughterq>=1)){
                    $fatherportion = round(((1/6)/$fatherq),4);
                    $remain = $remain - $fatherportion;
                }
            }

            if(isset($mother)){
                if(isset($son) || isset($father) || isset($ripson) || ($brotherq>1) || ($sisterq>1)){
                    $motherportion = round(((1/6)/$motherq),4);
                    $remain = $remain - $motherportion;
                }else if(isset($son) && isset($ripson) && ($brotherq<=1) && ($sisterq<=1)){
                    $motherportion = round(((1/3)/$motherq),4);
                    $remain = $remain - $motherportion;
                }else if(isset($wife) && isset($father)){
                    $motherportion = round(((1/3)/$motherq),4);
                    $remain = $remain - $motherportion;
                }
            }

            if(isset($grandpa)){
                if(isset($son) && is_null($father) && isset($ripson)){
                    $grandpaportion = round(((1/6)/$grandpaq),4);
                    $remain = $remain - $grandpaportion;
                }else if(isset($daughter) || isset($ripson) || isset($son)){
                    $grandpaportion = round(((1/6)/$grandpaq),4);
                    $remain = $remain - $grandpaportion;
                }
            }

            if(isset($grandma)){
                if(is_null($grandmother) || is_null($mother)){
                    $grandmaportion = round(((1/6)/$grandmaq),4);
                }else {
                    $grandmaportion = 0;
                }
                $remain = $remain - $grandmaportion;
            }

            if(isset($sister)){
                if(($sisterq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $sisterportion = round(((1/2)/$sisterq),4);
                    $remain = $remain - $sisterportion;
                }else if(($sisterq>1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $sisterportion = round(((2/3)/$sisterq),4);
                    $remain = $remain - $sisterportion;
                }
            }

            if(isset($stepsisM)){
                if(($sisterq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepsisMportion = round(((1/2)/$stepsisM),4);
                    $remain = $remain - $stepsisMportion;
                }else if(($sisterq>1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepsisMportion = round(((2/3)/$stepsisM),4);
                    $remain = $remain - $stepsisMportion;
                }
            }

            if(isset($stepbroM)){
                if(($stepbroMq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepbroMportion = round(((1/6)/$stepbroM),4);
                }else {
                    $stepbroMportion = 0;
                }
                $remain = $remain - $stepbroMportion;
            }

            if(isset($stepbroF)){
                if(($stepbroF>1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepbroFportion = round(((1/3)/$stepbroF),4);
                }else {
                    $stepbroFportion = 0;

                }
                $remain = $remain - $stepbroFportion;
            }

            if(isset($stepsisF)){
                if(($stepsisMq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepsisFportion = round(((1/6)/$stepsisF),4);
                    $remain = $remain - $stepsisFportion;

                }else if(($stepsisMq>1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepsisFportion = round(((1/3)/$stepsisM),4);
                    $remain = $remain - $stepsisFportion;
                }
            }
            $totalNoAsba1stCategory = 1;
            $portion = 1;

            if(isset($son) || isset($ripson)){
                $totalNoAsba1stCategory = ($sonq*2) + ($ripsonq*2) + $ripdaughterq + $daughterq;
                $portion = ($remain/$totalNoAsba1stCategory);
                $sonportion = $portion*2;
                if(isset($ripson)){
                    $ripsonportion = $sonportion;
                    $remain = $portion - ($sonportion*$sonq)+($ripsonportion*$ripsonq);
                }
                else{
                    $remain = $portion - ($sonportion*$sonq);
                }
            }

            if(isset($daughter) || isset($ripdaughter)){
                $totalNoAsba1stCategory = ($sonq*2) + ($ripsonq*2) + $ripdaughterq + $daughterq;
                $portion = ($remain/$totalNoAsba1stCategory);
                $daughterportion =$daughterportion+($remain/$daughterq);
                if(isset($ripdaughter)){
                    $ripdaughterportion = $daughterportion;
                    $remain = 0;
                }
                else{
                    $remain = 0;
                }
            }

            if($remain<0){
                $remain = 0;
            }

            if(isset($father)){
                if(is_null($son) || is_null($ripson)){
                    $fatherportion = $fatherportion + $remain;
                    $remain = 0;
                }
            }
            if(isset($grandpa)){
                if(is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $grandpaportion = $grandpaportion + $remain;
                    $remain = 0;
                }
            }
            if(isset($brother)){
                $brotherportion = $remain;
                $remain = 0;
            }
            if(isset($brotherson)){
                $brothersonportion = $remain;
                $remain = 0;
            }
            if(isset($brothersonson)){
                $brothersonsonportion = $remain;
                $remain = 0;
            }
            if(isset($sister)){
                $sisterportion = $sisterportion + $remain;
                $remain = 0;
            }
            if(isset($stepbroM)){
                $stepbroMportion = $remain;
                $remain = 0;
            }
            if(isset($stepbroMson)){
                $stepbroMsonportion = $remain;
                $remain = 0;
            }
            if(isset($stepbroMsonson)){
                $stepbroMsonsonportion = $remain;
                $remain = 0;
            }

            if(isset($uncle)){
                $uncleportion = $remain;
                $remain = 0;
            }
            if(isset($stepuncle)){
                $stepuncleportion = $remain;
                $remain = 0;
            }
            if(isset($cousin)){
                $cousinportion = $remain;
                $remain = 0;
            }
            if(isset($stepcousin)){
                $stepcousinportion = $remain;
                $remain = 0;
            }
            if(isset($cousinson)){
                $cousinsonportion = $remain;
                $remain = 0;
            }
            if(isset($stepcousinson)){
                $stepcousinsonportion = $remain;
                $remain = 0;
            }
            if(isset($cousinsonson)){
                $cousinsonsonportion = $remain;
                $remain = 0;
            }
            if(isset($stepcousinsonson)){
                $stepcousinsonsonportion = $remain;
                $remain = 0;
            }
            if(isset($wife)){
                $wifeportion = $wifeportion + $remain;
                $remain = 0;
            }
            if(isset($mother)){
                $motherportion = $motherportion + $remain;
                $remain = 0;
            }
//
//
//        var_dump(
//            'Wife:',$wifeportion,
//            'Son:',$sonportion,
//            'RipSon:',$ripsonportion,
//            'daughter:',$daughterportion,
//            'RipDaughter:',$ripdaughterportion,
//            'Mother:',$motherportion,
//            'father:',$fatherportion,
//            'Brother',$brotherportion,
//            'brother son', $brothersonportion,
//            'brother son son', $brothersonsonportion,
//            'Sister:',$sisterportion,
//            'Grandma:',$grandmaportion,
//            'Grandpa:',$grandpaportion,
//            'cousin', $cousinportion,
//            'cousin son', $cousinsonportion,
//            'uncle', $uncleportion,
//            'stepsis:',$stepsisFportion,
//            'stepbroF:',$stepbroFportion,
//            'stepbroM:',$stepbroMportion,
//            'stepsisM:',$stepsisMportion
//        );

            $AllPortionRelatives = array(
                'স্ত্রী:'=>round(abs($wifeportion),4),
                'ছেলে:'=>round(abs($sonportion),4),
                'মৃত ছেলে:'=>round(abs($ripsonportion),4),
                'কন্যা:'=>round(abs($daughterportion),4),
                'মৃত কন্যা:'=>round(abs($ripdaughterportion),4),
                'মা:'=>round(abs($motherportion),4),
                'বাবা:'=>round(abs($fatherportion),4),
                'সহোদর ভাই'=>round(abs($brotherportion),4),
                'সহোদর ভাইয়ের পুত্র'=>round(abs($brothersonportion),4) ,
                'সহোদর ভাইয়ের পুত্রের পুত্র'=>round(abs($brothersonsonportion),4) ,
                'সহোদর বোন:'=>round(abs($sisterportion),4),
                'দাদি:'=>round(abs($grandmaportion),4),
                'দাদা:'=>round(abs($grandpaportion),4),
                'চাচাতো ভাই'=> round(abs($cousinportion),4),
                'সৎ চাচাতো ভাই (বৈমাত্রেয়)'=>round(abs($stepcousinportion),4) ,
                'চাচাতো ভাইয়ের পুত্র'=>round(abs($cousinsonportion),4) ,
                'চাচাতো ভাইয়ের পুত্রের পুত্র'=>round(abs($cousinsonsonportion),4) ,
                'সৎ চাচাতো ভাইয়ের পুত্র'=>round(abs($stepcousinsonportion),4) ,
                'সৎ চাচাতো ভাইয়ের পুত্রের পুত্র'=>round(abs($stepcousinsonsonportion),4) ,
                'চাচা'=>round(abs($uncleportion),4) ,
                'চাচা (বৈমাত্রেয়)'=>round(abs($stepuncleportion),4) ,
                'সৎ বোন (বৈপিত্রেয়):'=>round(abs($stepsisFportion),4),
                'সৎ ভাই (বৈপিত্রেয়):'=>round(abs($stepbroFportion),4),
                'সৎ ভাই (বৈমাত্রেয়):'=>round(abs($stepbroMportion),4),
                'সৎ বোন (বৈমাত্রেয়):'=>round(abs($stepsisMportion),4),
                'সৎ ভাই(বৈমাত্রেয়)-এর পুত্র'=>round(abs($stepbroMsonportion),4),
                'সৎ ভাই(বৈমাত্রেয়)-এর পুত্রের পুত্র'=>round(abs($stepbroMsonsonportion),4),
            );


            return view('/show',compact('AllPortionRelatives','property','money','gold','silver'));
        }catch (\Exception $exception){
            redirect('/');
        }
    }

    public function female(){
        return view('female');
    }

    public function femalecalculation(Request $request){
        try{
            //in this function you have to imagine that hubby is wife
            $wife = $request->wife;
            $wifeq = $request->wifeq;
            $son = $request->son;
            $sonq = $request->sonq;
            $ripson = $request->ripson;
            $ripsonq = $request->ripsonq;
            $daughter = $request->daughter;
            $daughterq = $request->daughterq;
            $ripdaughter = $request->ripdaughter;
            $ripdaughterq = $request->ripdaughterq;
            $father = $request->father;
            $fatherq = $request->fatherq;
            $mother = $request->mother;
            $motherq = $request->motherq;
            $grandpa = $request->grandpa;
            $grandpaq = $request->grandpaq;
            $grandma = $request->grandma;
            $grandmaq = $request->grandmaq;
            $grandmother = $request->grandmother;
            $grandmotherq = $request->grandmotherq;
            $brother = $request->brother;
            $brotherq = $request->brotherq;
            $sister = $request->sister;
            $sisterq = $request->sisterq;
            $brotherson = $request->brotherson;
            $brothersonq = $request->brothersonq;
            $brothersonson = $request->brothersonson;
            $brothersonsonq = $request->brothersonsonq;
            $stepbroM = $request->stepbroM;
            $stepbroMq = $request->stepbroMq;
            $stepbroF = $request->stepbroF;
            $stepbroFq = $request->stepbroFq;
            $stepsisM = $request->stepsisM;
            $stepsisMq = $request->stepsisMq;
            $stepsisF = $request->stepsisF;
            $stepsisFq = $request->stepsisFq;
            $stepbroMson = $request->stepbroMson;
            $stepbroMsonq = $request->stepbroMsonq;
            $stepbroMsonson = $request->stepbroMsonson;
            $stepbroMsonsonq = $request->stepbroMsonsonq;
            $uncle = $request->uncle;
            $uncleq = $request->uncleq;
            $stepuncle = $request->stepuncle;
            $stepuncleq = $request->stepuncleq;
            $cousin = $request->cousin;
            $cousinq = $request->cousinq;
            $stepcousin = $request->stepcousin;
            $stepcousinq = $request->stepcousinq;
            $stepcousinson = $request->stepcousinson;
            $stepcousinsonq = $request->stepcousinsonq;
            $cousinson = $request->cousinson;
            $cousinsonq = $request->cousinsonq;
            $cousinsonson = $request->cousinsonson;
            $cousinsonsonq = $request->cousinsonsonq;
            $stepcousinsonsonq = $request->stepcousinsonson;
            $stepcousinsonson = $request->stepcousinsonsonq;
            $stepcousinsonsonq = $request->stepcousinsonsonq;

            $property = $request->property;
            $gold = $request->gold;
            $silver = $request->silver;
            $money = $request->money;

            $remain=0;
            $stepsisFportion=0;
            $stepbroFportion=0;
            $stepbroMportion=0;
            $stepsisMportion=0;
            $sisterportion=0;
            $grandmaportion=0;
            $grandpaportion=0;
            $motherportion=0;
            $fatherportion=0;
            $ripdaughterportion=0;
            $daughterportion=0;
            $wifeportion=0;
            $brothersonsonportion = 0;
            $brothersonportion = 0;
            $brotherportion = 0;
            $stepcousinsonsonportion = 0;
            $stepcousinsonportion = 0;
            $stepcousinportion = 0;
            $cousinsonsonportion = 0;
            $cousinsonportion = 0;
            $cousinportion = 0;
            $uncleportion = 0;
            $ripsonportion = 0;
            $sonportion = 0;
            $ripsonportion = 0;
            $stepuncleportion=0;
            $stepbroMsonportion=0;
            $stepbroMsonsonportion=0;

            $remain = 1;




            if(isset($wife)){
                if(isset($son) || isset($daughter) || isset($ripson) || isset($ripdaughter)){
                    $wifeportion = round(((1/4)/$wifeq),4);
                }else{
                    $wifeportion = round(((1/2)/$wifeq),4);
                }
                $remain = $remain - $wifeportion;
            }

            if(isset($daughter)){
                if(($daughterq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter)){
                    $daughterportion = round(((1/2)/$daughterq),4);
                    $remain = $remain - ($daughterportion);
                }else if(($daughterq>=1) && is_null($son) && is_null($ripson)){
                    $daughterportion = round(((2/3)/$daughterq),4);
                    $ripdaughterportion = $daughterportion;
                    $remain = $remain - ($daughterportion+$ripdaughterportion);
                }
            }
            if(isset($ripdaughter)){
                if(($ripdaughterq==1) && is_null($son) && is_null($ripson) && is_null($daughter)){
                    $ripdaughterportion = round(((1/2)/$ripdaughterq),4);
                    $remain = $remain - ($ripdaughterportion);
                }else if(($ripdaughterq>=1) && is_null($son) && is_null($ripson) && is_null($daughter)){
                    $ripdaughterportion = round(((2/3)/$ripdaughterq),4);
                    $remain = $remain - ($ripdaughterportion);
                }
            }

            if(isset($father)){
                if(isset($son) || isset($ripson) || ($daughterq>=1)){
                    $fatherportion = round(((1/6)/$fatherq),4);
                    $remain = $remain - $fatherportion;
                }
            }

            if(isset($mother)){
                if(isset($son) || isset($father) || isset($ripson) || ($brotherq>1) || ($sisterq>1)){
                    $motherportion = round(((1/6)/$motherq),4);
                    $remain = $remain - $motherportion;
                }else if(isset($son) && isset($ripson) && ($brotherq<=1) && ($sisterq<=1)){
                    $motherportion = round(((1/3)/$motherq),4);
                    $remain = $remain - $motherportion;
                }else if(isset($wife) && isset($father)){
                    $motherportion = round(((1/3)/$motherq),4);
                    $remain = $remain - $motherportion;
                }
            }

            if(isset($grandpa)){
                if(isset($son) && is_null($father) && isset($ripson)){
                    $grandpaportion = round(((1/6)/$grandpaq),4);
                    $remain = $remain - $grandpaportion;
                }else if(isset($daughter) || isset($ripson) || isset($son)){
                    $grandpaportion = round(((1/6)/$grandpaq),4);
                    $remain = $remain - $grandpaportion;
                }
            }

            if(isset($grandma)){
                if(is_null($grandmother) || is_null($mother)){
                    $grandmaportion = round(((1/6)/$grandmaq),4);
                }else {
                    $grandmaportion = 0;
                }
                $remain = $remain - $grandmaportion;
            }

            if(isset($sister)){
                if(($sisterq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $sisterportion = round(((1/2)/$sisterq),4);
                    $remain = $remain - $sisterportion;
                }else if(($sisterq>1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $sisterportion = round(((2/3)/$sisterq),4);
                    $remain = $remain - $sisterportion;
                }
            }

            if(isset($stepsisM)){
                if(($sisterq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepsisMportion = round(((1/2)/$stepsisM),4);
                    $remain = $remain - $stepsisMportion;
                }else if(($sisterq>1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepsisMportion = round(((2/3)/$stepsisM),4);
                    $remain = $remain - $stepsisMportion;
                }
            }

            if(isset($stepbroM)){
                if(($stepbroMq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepbroMportion = round(((1/6)/$stepbroM),4);
                }else {
                    $stepbroMportion = 0;
                }
                $remain = $remain - $stepbroMportion;
            }

            if(isset($stepbroF)){
                if(($stepbroF>1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepbroFportion = round(((1/3)/$stepbroF),4);
                }else {
                    $stepbroFportion = 0;

                }
                $remain = $remain - $stepbroFportion;
            }

            if(isset($stepsisF)){
                if(($stepsisMq==1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepsisFportion = round(((1/6)/$stepsisF),4);
                    $remain = $remain - $stepsisFportion;

                }else if(($stepsisMq>1) && is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $stepsisFportion = round(((1/3)/$stepsisM),4);
                    $remain = $remain - $stepsisFportion;
                }
            }
            $totalNoAsba1stCategory = 1;
            $portion = 1;

            if(isset($son) || isset($ripson)){
                $totalNoAsba1stCategory = ($sonq*2) + ($ripsonq*2) + $ripdaughterq + $daughterq;
                $portion = ($remain/$totalNoAsba1stCategory);
                $sonportion = $portion*2;
                if(isset($ripson)){
                    $ripsonportion = $sonportion;
                    $remain = $portion - ($sonportion*$sonq)+($ripsonportion*$ripsonq);
                }
                else{
                    $remain = $portion - ($sonportion*$sonq);
                }
            }

            if(isset($daughter) || isset($ripdaughter)){
                $totalNoAsba1stCategory = ($sonq*2) + ($ripsonq*2) + $ripdaughterq + $daughterq;
                $portion = ($remain/$totalNoAsba1stCategory);
                $daughterportion =$daughterportion+($remain/$daughterq);
                if(isset($ripdaughter)){
                    $ripdaughterportion = $daughterportion;
                    $remain = 0;
                }
                else{
                    $remain = 0;
                }
            }

            if($remain<0){
                $remain = 0;
            }

            if(isset($father)){
                if(is_null($son) || is_null($ripson)){
                    $fatherportion = $fatherportion + $remain;
                    $remain = 0;
                }
            }
            if(isset($grandpa)){
                if(is_null($son) && is_null($ripson) && is_null($ripdaughter) && is_null($daughter) && is_null($father) && is_null($brother)){
                    $grandpaportion = $grandpaportion + $remain;
                    $remain = 0;
                }
            }
            if(isset($brother)){
                $brotherportion = $remain;
                $remain = 0;
            }
            if(isset($brotherson)){
                $brothersonportion = $remain;
                $remain = 0;
            }
            if(isset($brothersonson)){
                $brothersonsonportion = $remain;
                $remain = 0;
            }
            if(isset($sister)){
                $sisterportion = $sisterportion + $remain;
                $remain = 0;
            }
            if(isset($stepbroM)){
                $stepbroMportion = $remain;
                $remain = 0;
            }
            if(isset($stepbroMson)){
                $stepbroMsonportion = $remain;
                $remain = 0;
            }
            if(isset($stepbroMsonson)){
                $stepbroMsonsonportion = $remain;
                $remain = 0;
            }

            if(isset($uncle)){
                $uncleportion = $remain;
                $remain = 0;
            }
            if(isset($stepuncle)){
                $stepuncleportion = $remain;
                $remain = 0;
            }
            if(isset($cousin)){
                $cousinportion = $remain;
                $remain = 0;
            }
            if(isset($stepcousin)){
                $stepcousinportion = $remain;
                $remain = 0;
            }
            if(isset($cousinson)){
                $cousinsonportion = $remain;
                $remain = 0;
            }
            if(isset($stepcousinson)){
                $stepcousinsonportion = $remain;
                $remain = 0;
            }
            if(isset($cousinsonson)){
                $cousinsonsonportion = $remain;
                $remain = 0;
            }
            if(isset($stepcousinsonson)){
                $stepcousinsonsonportion = $remain;
                $remain = 0;
            }
            if(isset($wife)){
                $wifeportion = $wifeportion + $remain;
                $remain = 0;
            }
            if(isset($mother)){
                $motherportion = $motherportion + $remain;
                $remain = 0;
            }
//
//
//        var_dump(
//            'Wife:',$wifeportion,
//            'Son:',$sonportion,
//            'RipSon:',$ripsonportion,
//            'daughter:',$daughterportion,
//            'RipDaughter:',$ripdaughterportion,
//            'Mother:',$motherportion,
//            'father:',$fatherportion,
//            'Brother',$brotherportion,
//            'brother son', $brothersonportion,
//            'brother son son', $brothersonsonportion,
//            'Sister:',$sisterportion,
//            'Grandma:',$grandmaportion,
//            'Grandpa:',$grandpaportion,
//            'cousin', $cousinportion,
//            'cousin son', $cousinsonportion,
//            'uncle', $uncleportion,
//            'stepsis:',$stepsisFportion,
//            'stepbroF:',$stepbroFportion,
//            'stepbroM:',$stepbroMportion,
//            'stepsisM:',$stepsisMportion
//        );

            $AllPortionRelatives = array(
                'স্বামী:'=>round(abs($wifeportion),4),
                'ছেলে:'=>round(abs($sonportion),4),
                'মৃত ছেলে:'=>round(abs($ripsonportion),4),
                'কন্যা:'=>round(abs($daughterportion),4),
                'মৃত কন্যা:'=>round(abs($ripdaughterportion),4),
                'মা:'=>round(abs($motherportion),4),
                'বাবা:'=>round(abs($fatherportion),4),
                'সহোদর ভাই'=>round(abs($brotherportion),4),
                'সহোদর ভাইয়ের পুত্র'=>round(abs($brothersonportion),4) ,
                'সহোদর ভাইয়ের পুত্রের পুত্র'=>round(abs($brothersonsonportion),4) ,
                'সহোদর বোন:'=>round(abs($sisterportion),4),
                'দাদি:'=>round(abs($grandmaportion),4),
                'দাদা:'=>round(abs($grandpaportion),4),
                'চাচাতো ভাই'=> round(abs($cousinportion),4),
                'সৎ চাচাতো ভাই (বৈমাত্রেয়)'=>round(abs($stepcousinportion),4) ,
                'চাচাতো ভাইয়ের পুত্র'=>round(abs($cousinsonportion),4) ,
                'চাচাতো ভাইয়ের পুত্রের পুত্র'=>round(abs($cousinsonsonportion),4) ,
                'সৎ চাচাতো ভাইয়ের পুত্র'=>round(abs($stepcousinsonportion),4) ,
                'সৎ চাচাতো ভাইয়ের পুত্রের পুত্র'=>round(abs($stepcousinsonsonportion),4) ,
                'চাচা'=>round(abs($uncleportion),4) ,
                'চাচা (বৈমাত্রেয়)'=>round(abs($stepuncleportion),4) ,
                'সৎ বোন (বৈপিত্রেয়):'=>round(abs($stepsisFportion),4),
                'সৎ ভাই (বৈপিত্রেয়):'=>round(abs($stepbroFportion),4),
                'সৎ ভাই (বৈমাত্রেয়):'=>round(abs($stepbroMportion),4),
                'সৎ বোন (বৈমাত্রেয়):'=>round(abs($stepsisMportion),4),
                'সৎ ভাই(বৈমাত্রেয়)-এর পুত্র'=>round(abs($stepbroMsonportion),4),
                'সৎ ভাই(বৈমাত্রেয়)-এর পুত্রের পুত্র'=>round(abs($stepbroMsonsonportion),4),
            );


            return view('/show',compact('AllPortionRelatives','property','money','gold','silver'));
        }catch (\Exception $exception){
            redirect('/');
        }

    }

    public function show(){
        return view('show');
    }


    public function rules(){
        return view('rule');
    }

    public function communication(){
        return view('communication');
    }

    public static function bn2en($number) {
        return str_replace(self::$bn, self::$en, $number);
    }

    public static function en2bn($number) {
        return str_replace(self::$en, self::$bn, $number);
    }


}
