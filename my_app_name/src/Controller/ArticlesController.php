<?php
namespace App\Controller;

use Cake\Controller\Controller;

class ArticlesController extends Controller{

    public function initialize(): void
    {
    
        parent::initialize();
        // layout folder
        $this->viewBuilder()->setLayout('articles');
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }

    public function index(){

        $articles=$this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));

    }

    // function for view 
    public function view($slug=null){
        $article=$this->Articles->findBySlug($slug)->firstOrFail();
        $this->set(compact('article'));
    }

    public function edit($slug){
        $article=$this->Articles->findBySlug($slug)->firstOrFail();

        if($this->request->is(['post','put'])){
            $this->Articles->patchEntity($article,$this->request->getData());
            if($this->Articles->save($article)){
                // create session success and display at index page
                $this->Flash->success(__("Your article has been updated! "));
                // redirected to index page after successfully updated article
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error("Unable to update your article!");
        }
        $this->set(compact('article'));
        // $this->set('article',$article);
    }

    public function add(){
        $article=$this->Articles->newEmptyEntity();
        if($this->request->is('post')){
            $article = $this->Articles->patchEntity($article,$this->request->getData());

            // access user_id =1 or set user_id =1
            $article->user_id = 1;
            if($this->Articles->save($article)){
                $this->Flash->success('Your Article has been saved.');
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__("Unable to add your article."));
        }
        // get a list of tags.
        // $tags=$this->Articles->Tags->find('list')->all();
        // $this->set('tags',$tags);
        $this->set('article',$article);
        // $this->set(compact('article'));
    }

  
    public function delete($slug){
        $this->request->allowMethod(['post','delete']);
        $find_dlt_article=$this->Articles->findBySlug($slug)->firstOrFail();

        if($this->Articles->delete($find_dlt_article)){
            $this->Flash->success("The {0} article has been deleted.",$find_dlt_article->title);
            $this->redirect(['action'=>'index']);
        }
        // if($find_dlt_article){
        //     session_start();
        //     $_SESSION['error']="not deleted The '{$find_dlt_article->title}' article has been deleted.";
        //     $this->redirect(['action'=>'index']);
        // }

        // // autoRender false is used to disable default php template and show current function output
        // $this->autoRender=false;
        // echo "delete";
        // $this->Flash->success("Successfully deleted article! ");
        // $this->redirect(['action'=>'index']);
        // $article=$this->Articles->
    }
}

?>