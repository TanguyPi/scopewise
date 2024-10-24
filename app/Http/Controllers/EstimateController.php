<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainForm;
use App\Models\Estimation;
use Illuminate\Support\Facades\Http;
use OpenAI\Laravel\Facades\OpenAI;

class EstimateController extends Controller
{
    public function getProject($id){
        // On récupère le form
        $form = MainForm::findOrFail($id);
        // Initialisation and run du thread de conversation
        $thread = OpenAI::threads()->create([]);
        // Ajout d'un message message au Thread
        $message = OpenAI::threads()->messages()->create($thread->id, [
            'role' => 'user',
            'content' => json_encode($form)
        ]);
        // Création d'un new run
        $run = OpenAI::threads()->runs()->create(
            threadId: $thread->id,
            parameters: [
                'assistant_id' => 'asst_hPg2TJXv7EJwP17wLjquT5oj',
            ],
        );
        // Gestion des status des run
        for($i=0;$i <= 10; $i++){
            if($run->status == "queued" || $run->status == "in_progress"){
                $waitRun = OpenAI::threads()->runs()->retrieve(
                    threadId: $thread->id,
                    runId: $run->id,
            );
            }
            if($waitRun->status == "failed"){
                    echo "failed";
            } 
            if($waitRun->status == "completed"){
                    $message = OpenAI::threads()->messages()->list($thread->id);
                        // Formatage des donénes envoyées par gpt
                        $data = preg_replace('/## (.*)/', '<strong>$1</strong>',$message->data[0]->content[0]->text->value);
                        $data= preg_replace('/##/','', $data);
                        $data = preg_replace('/# (.*)/', '<strong>$1</strong>', $data);
                        $data= preg_replace('/#/','', $data);
                        $data= preg_replace('/\*([^*]+)\*/', '<span>$1</span>', $data);
                        $data= preg_replace('/~/','', $data);
                    $project = Estimation::create([
                        'main_form_id' => $form->id,
                        'answer' => $data
                    ]);
                    return redirect()->route('get.project_id',[$project]);
                    
            }
            sleep(1);
        }
    }
    
}
