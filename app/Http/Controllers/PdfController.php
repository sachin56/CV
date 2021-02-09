<?php

namespace App\Http\Controllers;
use App\FormEight;
use App\FormFive;
use App\FormFour;
use App\FormNine;
use App\FormOne;
use App\FormSeven;
use App\FormSix;
use App\FormThree;
use App\FormTwo;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{

    public function showBeforePdf($design) {
        return view('download_pdf',['design'=>$design]);
    }

    public function pdfTest($design)
    {

        $user = Auth::user();
        $user_id = $user->id;


        $user_email = $user->email;
        if ($design == 1) {

            $form1_data = FormOne::where('user_id', $user_id)->get();

            foreach ($form1_data as $form) {

                $form1[] = $form;
            }

            $path = Storage::disk('public')->path("forms/form1/$user_email.pdf");

            $pdf = PDF::loadView('pdf.form1_pdf', ['data' => end($form1), 'user_email' => $user_email]);

            return $pdf->save($path)->download("$user_email.pdf");

        } else if ($design == 2) {

            $form2_data = FormTwo::where('user_id', $user_id)->get();

            foreach ($form2_data as $form) {

                $form2[] = $form;
            }

            $path = Storage::disk('public')->path("forms/form3/$user_email.pdf");

            $pdf = PDF::loadView('pdf.form2_pdf', ['data' => end($form2), 'user_email' => $user_email]);

            return $pdf->save($path)->download("$user_email.pdf");

        } else if ($design == 3) {

            $form3_data = FormThree::where('user_id', $user_id)->get();

            foreach ($form3_data as $form) {

                $form3[] = $form;
            }

            $path = Storage::disk('public')->path("forms/form3/$user_email.pdf");

            $pdf = PDF::loadView('pdf.form3_pdf', ['data' => end($form3), 'user_email' => $user_email]);

            return $pdf->save($path)->download("$user_email.pdf");

        } else if ($design == 4) {

            $form4_data = FormFour::where('user_id', $user_id)->get();

            foreach ($form4_data as $form) {

                $form4[] = $form;
            }

            $path = Storage::disk('public')->path("forms/form4/$user_email.pdf");

            $pdf = PDF::loadView('pdf.form4_pdf', ['data' => end($form4), 'user_email' => $user_email]);

            return $pdf->save($path)->download("$user_email.pdf");


        }
        else if ($design == 5) {

            $form5_data = FormFive::where('user_id', $user_id)->get();

            foreach ($form5_data as $form) {

                $form5[] = $form;
            }

            $path = Storage::disk('public')->path("forms/form5/$user_email.pdf");

            $pdf = PDF::loadView('pdf.form5_pdf',['data' => end($form5),'user_email'=>$user_email]);

            return $pdf->save($path)->download("$user_email.pdf");
        }

        else if ($design == 6) {

            $form6_data = FormSix::where('user_id', $user_id)->get();

            foreach ($form6_data as $form) {

                $form6[] = $form;
            }

            $path = Storage::disk('public')->path("forms/form6/$user_email.pdf");

            $pdf = PDF::loadView('pdf.form6_pdf',['data' => end($form6),'user_email'=>$user_email]);

            return $pdf->save($path)->download("$user_email.pdf");
        }
        else if ($design == 7) {

            $form7_data = FormSeven::where('user_id', $user_id)->get();

            foreach ($form7_data as $form) {

                $form7[] = $form;
            }

            $path = Storage::disk('public')->path("forms/form7/$user_email.pdf");

            $pdf = PDF::loadView('pdf.form7_pdf',['data' => end($form7),'user_email'=>$user_email]);

            return $pdf->save($path)->download("$user_email.pdf");
        }

        else if ($design == 8) {

            $form8_data = FormEight::where('user_id', $user_id)->get();

            foreach ($form8_data as $form) {

                $form8[] = $form;
            }

            $path = Storage::disk('public')->path("forms/form8/$user_email.pdf");

            $pdf = PDF::loadView('pdf.form8_pdf',['data' => end($form8),'user_email'=>$user_email]);

            return $pdf->save($path)->download("$user_email.pdf");
        }

        else if ($design == 9) {

            $form9_data = FormNine::where('user_id', $user_id)->get();

            foreach ($form9_data as $form) {

                $form9[] = $form;
            }

            $path = Storage::disk('public')->path("forms/form9/$user_email.pdf");

            $pdf = PDF::loadView('pdf.form9_pdf',['data' => end($form9),'user_email'=>$user_email]);

            return $pdf->save($path)->download("$user_email.pdf");
        }
    }
}
