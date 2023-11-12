<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {
            if (strtolower($message) == 'hola') {
                $botman->ask('¡Hola! ¿Cómo puedo ayudarte hoy? ¿Ya estás registrado?', function ($answer, $conversation) {
                    $response = strtolower($answer->getText());
        
                    if ($response == 'si') {
                        $conversation->ask('¡Muy bien! ¿Quieres información de Instructor o Alumno?', function ($answer, $conversation) {
                            $roleResponse = strtolower($answer->getText());
        
                            if ($roleResponse == 'instructor') {
                                $conversation->ask('Quieres ser instructor o ya eres instructor?', function ($answer, $conversation){
                                    $instructorResponse = strtolower($answer->getText());

                                    if ($instructorResponse == 'quiero ser instructor') {
                                        $conversation->say('Comunicaté al siguiente correo para solicitar al admin ser instructor <br><br>miguel_valencia24@hotmail.com');
                                    } else {
                                        $conversation->say('En este link puedes crear un curso. <br><br>http://137.184.238.153/instructor/courses/create');
                                    }
                                });
                            } elseif ($roleResponse == 'alumno') {
                                $conversation->ask('Quieres aprender algo nuevo buscando tu solo o viendo las opciones que tenemos para ti desde el chat.', function ($answer, $conversation){
                                    $alumnoResponse = strtolower($answer->getText());

                                    if($alumnoResponse == 'yo solo') {
                                        $conversation->say('¡Muy bien! Entonces te dejamos el link de cursos para que tu puedas explorar. <br><br>http://137.184.238.153/cursos');
                                    } else {
                                        $conversation->ask('Qué categoria buscas tu curso? <br>Desarrollo Web <br>Diseño Web <br>Progrmación', function ($answer, $conversation){
                                            $categoryResponse = strtolower($answer->getText());

                                            if ($categoryResponse == 'desarrollo web') {
                                                $conversation->ask('Qué profesor te interesa? <br>Jose Fernandez <br>Coders Free', function ($answer, $conversation){
                                                    $desarrolloResponse = strtolower($answer->getText());

                                                    if ($desarrolloResponse == 'jose fernandez') {
                                                        $conversation->ask('Qué curso te interesa? <br>JavaScript <br>Node.js', function ($answer, $conversation){
                                                            $cursoDes1Response = strtolower($answer->getText());

                                                            if ($cursoDes1Response == 'javascript') {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/javascript');
                                                            } else {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/node-js');
                                                            }
                                                        });

                                                    } else {
                                                        $conversation->ask('Qué curso te interesa? <br>Laravel <br>Livewire', function ($answer, $conversation){
                                                            $cursoDes2Response = strtolower($answer->getText());

                                                            if ($cursoDes2Response == 'laravel') {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/curso-laravel-10-desde-cero');
                                                            } else {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/curso-livewire-v3-desde-cero');
                                                            }
                                                        });
                                                    }
                                                });

                                            } elseif ($categoryResponse == 'diseño web') {
                                                $conversation->ask('Qué profesor te interesa? <br>JFalcon Masters <br>Coders Free', function ($answer, $conversation){
                                                    $diseñoResponse = strtolower($answer->getText());
                                                    
                                                    if ($diseñoResponse == 'falcon masters') {
                                                        $conversation->ask('Qué curso te interesa? <br>HTML <br>CSS', function ($answer, $conversation){
                                                            $cursoDis1Response = strtolower($answer->getText());

                                                            if ($cursoDis1Response == 'html') {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/curso-b-sico-de-html-desde-0');
                                                            } else {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/curso-b-sico-de-css-desde-0');
                                                            }
                                                        });
                                                    } else {
                                                        $conversation->ask('Qué curso te interesa? <br>Angular <br>PHP', function ($answer, $conversation){
                                                            $cursoDis2Response = strtolower($answer->getText());

                                                            if ($cursoDis2Response == 'angular') {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/angular-desde-cero');
                                                            } else {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/aprende-a-crear-tu-propio-framework-php');
                                                            }
                                                        });
                                                    }
                                                });
                                            } else {
                                                $conversation->ask('Qué profesor te interesa? <br>Alex Taboada <br>Xavier Reyes', function ($answer, $conversation){
                                                    $prograResponse = strtolower($answer->getText());
                                                    
                                                    if ($prograResponse == 'alex taboada') {
                                                        $conversation->ask('Qué curso te interesa? <br>Java <br>Python', function ($answer, $conversation){
                                                            $cursoPro1Response = strtolower($answer->getText());

                                                            if ($cursoPro1Response == 'java') {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/java');
                                                            } else {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/python');
                                                            }
                                                        });
                                                    } else {
                                                        $conversation->ask('Qué curso te interesa? <br>Vsco <br>Progra', function ($answer, $conversation){
                                                            $cursoPro2Response = strtolower($answer->getText());

                                                            if ($cursoPro2Response == 'vsco') {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/vsco-desde-cero');
                                                            } else {
                                                                $conversation->say('¡Excelente Elección! Te dejamos el link para que puedas entrar a ese curso. <br><br>http://137.184.238.153/cursos/aprende-a-programar');
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        });
                                    }
                                });
                            } else {
                                $conversation->say('No entendí tu respuesta.');
                            }
                        });
                    } else {
                        $conversation->say('¡No hay problema! Te dejo el link para que puedas registrarte. <br><br>http://137.184.238.153/register');
                    }
                });
            } else {
                $botman->reply('Escribe "Hola" para empezar la conversación');
            }
        });
        
        $botman->listen();        

    }
}
