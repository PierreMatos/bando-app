<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use App\Repositories\TrackRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Response;




class PostController extends AppBaseController
{
    /** @var  PostRepository */
    private $postRepository;
    private $trackRepository;

    public function __construct(PostRepository $postRepo, TrackRepository $trackRepo)
    {
        $this->postRepository = $postRepo;
        $this->trackRepository = $trackRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        $posts = $this->postRepository->all();

        if ($user->mail = 'admin@criatura.com') {

        return view('posts.index')
            ->with('posts', $posts);
        }else

        return view('feed')
            ->with('posts', $posts);

    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $input = $request->all();

        $validator = FacadesValidator::make($request->all(), [
            'asset' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        if ($validator->fails()) {
            return ($validator->messages()->first());
        }
        $image = $request->asset;

        $image_uploaded_path = $image->store('uploads','public');

        $uploadedImageResponse = array(
            "image_name" => basename($image_uploaded_path),
            "image_url" => Storage::disk('public')->url($image_uploaded_path),
            "mime" => $image->getClientMimeType()
        );

        $input['asset'] = $uploadedImageResponse['image_url'];

        $post = $this->postRepository->create($input);

        Flash::success('Post saved successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param int $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $post = $this->postRepository->update($request->all(), $id);

        Flash::success('Post updated successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $this->postRepository->delete($id);

        Flash::success('Post deleted successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display a listing of the Post to the fedd.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function feedPosts(Request $request)
    {
        $posts = $this->postRepository->all();

        return view('feed')
            ->with('posts', $posts);
    }


    public function album (Request $request)
    {
        $posts = $this->postRepository->all();
        $album = $posts->where('id',1); // bem bonda
        $tracks = $this->trackRepository->all();
        // $album = $posts->where('id',1); // bem bonda
        //  = $this->postRepository->where('id',1);
        return view('bembonda')
            ->with('album', $album[0])
            ->with('tracks', $tracks);
    }
}
