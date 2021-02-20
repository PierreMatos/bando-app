<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrackRequest;
use App\Http\Requests\UpdateTrackRequest;
use App\Repositories\TrackRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Response;

class TrackController extends AppBaseController
{
    /** @var  TrackRepository */
    private $trackRepository;

    public function __construct(TrackRepository $trackRepo)
    {
        $this->trackRepository = $trackRepo;
    }

    /**
     * Display a listing of the Track.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tracks = $this->trackRepository->all();

        return view('tracks.index')
            ->with('tracks', $tracks);
    }

    /**
     * Show the form for creating a new Track.
     *
     * @return Response
     */
    public function create()
    {
        return view('tracks.create');
    }

    /**
     * Store a newly created Track in storage.
     *
     * @param CreateTrackRequest $request
     *
     * @return Response
     */
    public function store(CreateTrackRequest $request)
    {
        $input = $request->all();

        $track = $this->trackRepository->create($input);

        Flash::success('Track saved successfully.');

        return redirect(route('tracks.index'));
    }

    /**
     * Display the specified Track.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $track = $this->trackRepository->find($id);

        if (empty($track)) {
            Flash::error('Track not found');

            return redirect(route('tracks.index'));
        }

        return view('tracks.show')->with('track', $track);
    }

    /**
     * Show the form for editing the specified Track.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $track = $this->trackRepository->find($id);

        if (empty($track)) {
            Flash::error('Track not found');

            return redirect(route('tracks.index'));
        }

        return view('tracks.edit')->with('track', $track);
    }

    /**
     * Update the specified Track in storage.
     *
     * @param int $id
     * @param UpdateTrackRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrackRequest $request)
    {
        $track = $this->trackRepository->find($id);

        $input = $request->all();

        $file = $input['file'];

        $filename = $request->file('file')->hashName();
        $InfrasFileName = $file->storeAs('assets/tracks', $filename);

        $input['file'] = $filename;

       
        if (empty($track)) {
            Flash::error('Track not found');

            return redirect(route('tracks.index'));
        }

        $track = $this->trackRepository->update($input, $id);

        Flash::success('Track updated successfully.');

        return redirect(route('tracks.index'));
    }

    /**
     * Remove the specified Track from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $track = $this->trackRepository->find($id);

        if (empty($track)) {
            Flash::error('Track not found');

            return redirect(route('tracks.index'));
        }

        $this->trackRepository->delete($id);

        Flash::success('Track deleted successfully.');

        return redirect(route('tracks.index'));
    }

    /**
     * Show Song with related.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function showTrackWithRelated($slug)
    {
        // $track = $this->trackRepository->find($id);
        // $track = DB::table('track')->where('slug', $slug)->get()->first();
        $track = $this->trackRepository->findBy('slug', $slug)->first();


        $album = DB::table('albums')->where('id', $track->album_id)->get()->first();
        
        // timit 4
        $tracks = DB::table('track')->where('album_id', 1)->limit(4)->get();

        if (empty($track)) {
            Flash::error('Track not found');

            return redirect(route('tracks.index'));
        }

        return view('letra')
                    ->with('track', $track)
                    ->with('album', $album)
                    ->with('related', $tracks);

    }
}
