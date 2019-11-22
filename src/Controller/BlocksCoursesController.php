<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BlocksCourses Controller
 *
 * @property \App\Model\Table\BlocksCoursesTable $BlocksCourses
 *
 * @method \App\Model\Entity\BlocksCourse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlocksCoursesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses', 'Blocks']
        ];
        $blocksCourses = $this->paginate($this->BlocksCourses);

        $this->set(compact('blocksCourses'));
    }

    /**
     * View method
     *
     * @param string|null $id Blocks Course id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blocksCourse = $this->BlocksCourses->get($id, [
            'contain' => ['Courses', 'Blocks']
        ]);

        $this->set('blocksCourse', $blocksCourse);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blocksCourse = $this->BlocksCourses->newEntity();
        if ($this->request->is('post')) {
            $blocksCourse = $this->BlocksCourses->patchEntity($blocksCourse, $this->request->getData());
            if ($this->BlocksCourses->save($blocksCourse)) {
                $this->Flash->success(__('The blocks course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blocks course could not be saved. Please, try again.'));
        }
        $courses = $this->BlocksCourses->Courses->find('list', ['limit' => 200]);
        $blocks = $this->BlocksCourses->Blocks->find('list', ['limit' => 200]);
        $this->set(compact('blocksCourse', 'courses', 'blocks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blocks Course id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blocksCourse = $this->BlocksCourses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blocksCourse = $this->BlocksCourses->patchEntity($blocksCourse, $this->request->getData());
            if ($this->BlocksCourses->save($blocksCourse)) {
                $this->Flash->success(__('The blocks course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blocks course could not be saved. Please, try again.'));
        }
        $courses = $this->BlocksCourses->Courses->find('list', ['limit' => 200]);
        $blocks = $this->BlocksCourses->Blocks->find('list', ['limit' => 200]);
        $this->set(compact('blocksCourse', 'courses', 'blocks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blocks Course id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blocksCourse = $this->BlocksCourses->get($id);
        if ($this->BlocksCourses->delete($blocksCourse)) {
            $this->Flash->success(__('The blocks course has been deleted.'));
        } else {
            $this->Flash->error(__('The blocks course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
