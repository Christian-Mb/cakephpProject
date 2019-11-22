<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SitesSpecialties Controller
 *
 * @property \App\Model\Table\SitesSpecialtiesTable $SitesSpecialties
 *
 * @method \App\Model\Entity\SitesSpecialty[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SitesSpecialtiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sites', 'Specialties']
        ];
        $sitesSpecialties = $this->paginate($this->SitesSpecialties);

        $this->set(compact('sitesSpecialties'));
    }

    /**
     * View method
     *
     * @param string|null $id Sites Specialty id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sitesSpecialty = $this->SitesSpecialties->get($id, [
            'contain' => ['Sites', 'Specialties']
        ]);

        $this->set('sitesSpecialty', $sitesSpecialty);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sitesSpecialty = $this->SitesSpecialties->newEntity();
        if ($this->request->is('post')) {
            $sitesSpecialty = $this->SitesSpecialties->patchEntity($sitesSpecialty, $this->request->getData());
            if ($this->SitesSpecialties->save($sitesSpecialty)) {
                $this->Flash->success(__('The sites specialty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sites specialty could not be saved. Please, try again.'));
        }
        $sites = $this->SitesSpecialties->Sites->find('list', ['limit' => 200]);
        $specialties = $this->SitesSpecialties->Specialties->find('list', ['limit' => 200]);
        $this->set(compact('sitesSpecialty', 'sites', 'specialties'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sites Specialty id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sitesSpecialty = $this->SitesSpecialties->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sitesSpecialty = $this->SitesSpecialties->patchEntity($sitesSpecialty, $this->request->getData());
            if ($this->SitesSpecialties->save($sitesSpecialty)) {
                $this->Flash->success(__('The sites specialty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sites specialty could not be saved. Please, try again.'));
        }
        $sites = $this->SitesSpecialties->Sites->find('list', ['limit' => 200]);
        $specialties = $this->SitesSpecialties->Specialties->find('list', ['limit' => 200]);
        $this->set(compact('sitesSpecialty', 'sites', 'specialties'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sites Specialty id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sitesSpecialty = $this->SitesSpecialties->get($id);
        if ($this->SitesSpecialties->delete($sitesSpecialty)) {
            $this->Flash->success(__('The sites specialty has been deleted.'));
        } else {
            $this->Flash->error(__('The sites specialty could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
