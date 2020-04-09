<?php

namespace App\Http\Controllers;

use App\DataTables\InstitutesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInstitutesRequest;
use App\Http\Requests\UpdateInstitutesRequest;
use App\Repositories\InstitutesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class InstitutesController extends AppBaseController
{
    /** @var  InstitutesRepository */
    private $institutesRepository;

    public function __construct(InstitutesRepository $institutesRepo)
    {
        $this->institutesRepository = $institutesRepo;
    }

    /**
     * Display a listing of the Institutes.
     *
     * @param InstitutesDataTable $institutesDataTable
     * @return Response
     */
    public function index(InstitutesDataTable $institutesDataTable)
    {
        return $institutesDataTable->render('institutes.index');
    }

    /**
     * Show the form for creating a new Institutes.
     *
     * @return Response
     */
    public function create()
    {
        return view('institutes.create');
    }

    /**
     * Store a newly created Institutes in storage.
     *
     * @param CreateInstitutesRequest $request
     *
     * @return Response
     */
    public function store(CreateInstitutesRequest $request)
    {
        $input = $request->all();

        $institutes = $this->institutesRepository->create($input);

        Flash::success('Institutes saved successfully.');

        return redirect(route('institutes.index'));
    }

    /**
     * Display the specified Institutes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $institutes = $this->institutesRepository->find($id);

        if (empty($institutes)) {
            Flash::error('Institutes not found');

            return redirect(route('institutes.index'));
        }

        return view('institutes.show')->with('institutes', $institutes);
    }

    /**
     * Show the form for editing the specified Institutes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $institutes = $this->institutesRepository->find($id);

        if (empty($institutes)) {
            Flash::error('Institutes not found');

            return redirect(route('institutes.index'));
        }

        return view('institutes.edit')->with('institutes', $institutes);
    }

    /**
     * Update the specified Institutes in storage.
     *
     * @param  int              $id
     * @param UpdateInstitutesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstitutesRequest $request)
    {
        $institutes = $this->institutesRepository->find($id);

        if (empty($institutes)) {
            Flash::error('Institutes not found');

            return redirect(route('institutes.index'));
        }

        $institutes = $this->institutesRepository->update($request->all(), $id);

        Flash::success('Institutes updated successfully.');

        return redirect(route('institutes.index'));
    }

    /**
     * Remove the specified Institutes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $institutes = $this->institutesRepository->find($id);

        if (empty($institutes)) {
            Flash::error('Institutes not found');

            return redirect(route('institutes.index'));
        }

        $this->institutesRepository->delete($id);

        Flash::success('Institutes deleted successfully.');

        return redirect(route('institutes.index'));
    }
}
