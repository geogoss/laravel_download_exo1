<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $members = Member::all();
        return view('pages.indexMember', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = Gender::all();
        return view('pages.createMember', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:30',
            'age' => 'required |integer|',
            'genre' => 'required'
        ]);
        $store = new Member();
        $store->src = $request->file('src')->hashName();
        Storage::put('public', $request->file('src'));
        $store->name = $request->name;
        $store->age = $request->age;
        $store->genre = $request->genre;
        $store->save();
        return redirect('/member')->with('success', 'Member created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('pages.editMember', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        
        $member->name = $request->name;
        $member->age = $request->age;
        $member->genre = $request->genre;
        if ($request->src != null) {
            Storage::delete('public/'.$member->src);
            $member->src = $request->file('src')->hashName();
            Storage::put('public/', $request->file('src'));
        }
        $member->save();
        return redirect('/member/'.$member->id.'/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        Storage::delete('public/'.$member->src);
        $member->delete();
        return redirect()->back()->with('danger', 'member deleted');

    }

    public function download ($id) {
        $members = Member::find($id);
        return Storage::download('public/'.$members->src);
    }

}
