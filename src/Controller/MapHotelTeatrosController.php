<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MapHotelTeatros Controller
 *
 * @property \App\Model\Table\MapHotelTeatrosTable $MapHotelTeatros
 */
class MapHotelTeatrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mapHotelTeatros = $this->paginate($this->MapHotelTeatros);

        $this->set(compact('mapHotelTeatros'));
        $this->set('_serialize', ['mapHotelTeatros']);
    }

    /**
     * View method
     *
     * @param string|null $id Map Hotel Teatro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mapHotelTeatro = $this->MapHotelTeatros->get($id, [
            'contain' => []
        ]);

        $this->set('mapHotelTeatro', $mapHotelTeatro);
        $this->set('_serialize', ['mapHotelTeatro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mapHotelTeatro = $this->MapHotelTeatros->newEntity();
        if ($this->request->is('post')) {
            $mapHotelTeatro = $this->MapHotelTeatros->patchEntity($mapHotelTeatro, $this->request->data);
            if ($this->MapHotelTeatros->save($mapHotelTeatro)) {
                $this->Flash->success(__('The map hotel teatro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map hotel teatro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapHotelTeatro'));
        $this->set('_serialize', ['mapHotelTeatro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Map Hotel Teatro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mapHotelTeatro = $this->MapHotelTeatros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mapHotelTeatro = $this->MapHotelTeatros->patchEntity($mapHotelTeatro, $this->request->data);
            if ($this->MapHotelTeatros->save($mapHotelTeatro)) {
                $this->Flash->success(__('The map hotel teatro has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The map hotel teatro could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mapHotelTeatro'));
        $this->set('_serialize', ['mapHotelTeatro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Map Hotel Teatro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mapHotelTeatro = $this->MapHotelTeatros->get($id);
        if ($this->MapHotelTeatros->delete($mapHotelTeatro)) {
            $this->Flash->success(__('The map hotel teatro has been deleted.'));
        } else {
            $this->Flash->error(__('The map hotel teatro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
