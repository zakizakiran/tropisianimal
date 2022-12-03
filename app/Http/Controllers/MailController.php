<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Mail;
use Illuminate\Http\Request;


class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mails = DB::table('mails')->get();
        $mails = Mail::latest();
        return view('admin.mail',[
            'mails' => $mails->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'subject' => 'required|max:100',
            'description' => 'required'
        ]);

        Mail::create($validatedData);
        toastr()->success('Mail telah berhasil dikirim!');
        return redirect('kontak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mails = Mail::findOrFail($id);
        return view('admin.show-mail', compact('mails'),[
            'title' => 'MAILBOX'
        ]);
    }

    public function orderASC(Mail $mail)
    {
        // Mail::orderBy('date','asc')->get();
        // return redirect('/mail');
        $mails = DB::table('mails')
         -> orderBy('date', 'asc')
         -> get();

        return view('admin.mail',[
            'mails' => $mails
        ]);
    }

    public function orderDESC(Mail $mail)
    {
        $mails = DB::table('mails')
        -> orderBy('date', 'desc')
        -> get();

       return view('admin.mail',[
           'mails' => $mails
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mail::destroy($id);
        // toastr()->success('Mail Berhasil Dihapus!');
        return redirect('mail')->with('success', 'Mail Berhasil Dihapus!');

    }

    public function deleteSelected(Request $request)
    {
        $ids = $request -> ids;
        Mail::whereIn('id',$ids)->delete();
    }
}
