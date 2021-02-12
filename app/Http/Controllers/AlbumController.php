<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use App\Repositories\AlbumRepository;
use App\Repositories\TrackRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Response;

class AlbumController extends AppBaseController
{
    /** @var  AlbumRepository */
    private $albumRepository;
    private $trackRepository;

    public function __construct(AlbumRepository $albumRepo, TrackRepository $trackRepo)
    {
        $this->albumRepository = $albumRepo;
        $this->trackRepository = $trackRepo;
    }

    /**
     * Display a listing of the Album.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $albums = $this->albumRepository->all();

        return view('albums.index')
            ->with('albums', $albums);
    }

    /**
     * Show the form for creating a new Album.
     *
     * @return Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created Album in storage.
     *
     * @param CreateAlbumRequest $request
     *
     * @return Response
     */
    public function store(CreateAlbumRequest $request)
    {
        $input = $request->all();

        Storage::put($request->name, $request->asset, 'private');

        $album = $this->albumRepository->create($input);

        Flash::success('Album saved successfully.');

        return redirect(route('albums.index'));
    }

    /**
     * Display the specified Album.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $album = $this->albumRepository->find($id);

        if (empty($album)) {
            Flash::error('Album not found');

            return redirect(route('albums.index'));
        }

        return view('albums.show')->with('album', $album);
    }

    /**
     * Show the form for editing the specified Album.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $album = $this->albumRepository->find($id);

        if (empty($album)) {
            Flash::error('Album not found');

            return redirect(route('albums.index'));
        }

        return view('albums.edit')->with('album', $album);
    }

    /**
     * Update the specified Album in storage.
     *
     * @param int $id
     * @param UpdateAlbumRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlbumRequest $request)
    {
        $album = $this->albumRepository->find($id);

        if (empty($album)) {
            Flash::error('Album not found');

            return redirect(route('albums.index'));
        }

        $album = $this->albumRepository->update($request->all(), $id);

        Flash::success('Album updated successfully.');

        return redirect(route('albums.index'));
    }

    /**
     * Remove the specified Album from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $album = $this->albumRepository->find($id);

        if (empty($album)) {
            Flash::error('Album not found');

            return redirect(route('albums.index'));
        }

        $this->albumRepository->delete($id);

        Flash::success('Album deleted successfully.');

        return redirect(route('albums.index'));
    }

    
    /**
     * Display a Album in front end
     *
     * @param Request $request
     *
     * @return Response
     */
    public function showAlbum($album)
    {
        // TODO No create preencher campo slug

        $album = DB::table('albums')->where('name', $album)->get()->first();

        $tracks = DB::table('track')->where('album_id', 1)->get();

        if (empty($album)) {
            Flash::error('Album not found');

            return redirect(route('/'));
        }

        return view('album')
            ->with('tracks', $tracks)
            ->with('album', $album);
    }
}
