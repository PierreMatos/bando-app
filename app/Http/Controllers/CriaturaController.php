<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCriaturaRequest;
use App\Http\Requests\UpdateCriaturaRequest;
use App\Repositories\CriaturaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CriaturaController extends AppBaseController
{
    /** @var  CriaturaRepository */
    private $criaturaRepository;

    public function __construct(CriaturaRepository $criaturaRepo)
    {
        $this->criaturaRepository = $criaturaRepo;
    }

    /**
     * Display a listing of the Criatura.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $criaturas = $this->criaturaRepository->all();

        return view('criaturas.index')
            ->with('criaturas', $criaturas);
    }

    /**
     * Show the form for creating a new Criatura.
     *
     * @return Response
     */
    public function create()
    {
        return view('criaturas.create');
    }

    /**
     * Store a newly created Criatura in storage.
     *
     * @param CreateCriaturaRequest $request
     *
     * @return Response
     */
    public function store(CreateCriaturaRequest $request)
    {
        $input = $request->all();

        $criatura = $this->criaturaRepository->create($input);

        Flash::success('Criatura saved successfully.');

        return redirect(route('criaturas.index'));
    }

    /**
     * Display the specified Criatura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $criatura = $this->criaturaRepository->find($id);

        if (empty($criatura)) {
            Flash::error('Criatura not found');

            return redirect(route('criaturas.index'));
        }

        return view('criaturas.show')->with('criatura', $criatura);
    }

    /**
     * Show the form for editing the specified Criatura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $criatura = $this->criaturaRepository->find($id);

        if (empty($criatura)) {
            Flash::error('Criatura not found');

            return redirect(route('criaturas.index'));
        }

        return view('criaturas.edit')->with('criatura', $criatura);
    }

    /**
     * Update the specified Criatura in storage.
     *
     * @param int $id
     * @param UpdateCriaturaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCriaturaRequest $request)
    {
        $criatura = $this->criaturaRepository->find($id);

        if (empty($criatura)) {
            Flash::error('Criatura not found');

            return redirect(route('criaturas.index'));
        }

        $criatura = $this->criaturaRepository->update($request->all(), $id);

        Flash::success('Criatura updated successfully.');

        return redirect(route('criaturas.index'));
    }

    /**
     * Remove the specified Criatura from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $criatura = $this->criaturaRepository->find($id);

        if (empty($criatura)) {
            Flash::error('Criatura not found');

            return redirect(route('criaturas.index'));
        }

        $this->criaturaRepository->delete($id);

        Flash::success('Criatura deleted successfully.');

        return redirect(route('criaturas.index'));
    }

    /**
     * Display a Criatura in front end
     *
     * @param Request $request
     *
     * @return Response
     */
    public function showCriatura($slug)
    {

        $criatura = $this->criaturaRepository->findBy('slug', $slug)->first();

        if (empty($criatura)) {
            Flash::error('Criatura not found');

            return redirect(route('/'));
        }

        return view('criatura')
            ->with('criatura', $criatura);
    }
}
