<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SessionsTeachers Controller
 *
 * @property \App\Model\Table\SessionsTeachersTable $SessionsTeachers
 *
 * @method \App\Model\Entity\SessionsTeacher[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SessionsTeachersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sessions', 'Teachers']
        ];
        $sessionsTeachers = $this->paginate($this->SessionsTeachers);

        $this->set(compact('sessionsTeachers'));
    }

    /**
     * View method
     *
     * @param string|null $id Sessions Teacher id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sessionsTeacher = $this->SessionsTeachers->get($id, [
            'contain' => ['Sessions', 'Teachers']
        ]);

        $this->set('sessionsTeacher', $sessionsTeacher);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sessionsTeacher = $this->SessionsTeachers->newEntity();
        if ($this->request->is('post')) {
            $sessionsTeacher = $this->SessionsTeachers->patchEntity($sessionsTeacher, $this->request->getData());
            if ($this->SessionsTeachers->save($sessionsTeacher)) {
                $this->Flash->success(__('The sessions teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sessions teacher could not be saved. Please, try again.'));
        }
        $sessions = $this->SessionsTeachers->Sessions->find('list', ['limit' => 200]);
        $teachers = $this->SessionsTeachers->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('sessionsTeacher', 'sessions', 'teachers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sessions Teacher id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sessionsTeacher = $this->SessionsTeachers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sessionsTeacher = $this->SessionsTeachers->patchEntity($sessionsTeacher, $this->request->getData());
            if ($this->SessionsTeachers->save($sessionsTeacher)) {
                $this->Flash->success(__('The sessions teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sessions teacher could not be saved. Please, try again.'));
        }
        $sessions = $this->SessionsTeachers->Sessions->find('list', ['limit' => 200]);
        $teachers = $this->SessionsTeachers->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('sessionsTeacher', 'sessions', 'teachers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sessions Teacher id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sessionsTeacher = $this->SessionsTeachers->get($id);
        if ($this->SessionsTeachers->delete($sessionsTeacher)) {
            $this->Flash->success(__('The sessions teacher has been deleted.'));
        } else {
            $this->Flash->error(__('The sessions teacher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
