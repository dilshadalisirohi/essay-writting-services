<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Repositories\Interfaces\ContactRepositoryInterface;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * @var ContactRepositoryInterface
     */
    protected $contactRepo;

    /**
     * @param ContactRepositoryInterface $contactRepo
     */
    public function __construct(ContactRepositoryInterface $contactRepo)
    {
        $this->contactRepo = $contactRepo;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contacts =  $this->contactRepo->all();

        return view('admin.contact.list', compact('contacts'));
    }

    /**
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactRequest $request)
    {
        $this->contactRepo->store($request->all());

        Toastr::success('Your comment has been sent', 'Thank You');

        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $contact = $this->contactRepo->find($id);

        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $this->contactRepo->update($input, $id);

        return redirect()->route('contact-us')->with('message', 'Comment been successfully updated');
    }
}
