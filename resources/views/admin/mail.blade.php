@extends('adminlte::page')
@section('title', 'Mailbox')

@section('content_header')
    <h1 class=""><i class="bi bi-envelope-check"></i> Inbox</h1>
@stop

@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            a {
                text-decoration: none
            }

            .description {
                line-height: 20px;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                line-clamp: 2;
                -webkit-box-orient: vertical;
            }

            #del-btn:hover {
                background: transparent;
                color: #DC3545
            }
        </style>
    </head>

    <div class="container cotainer-delete d-flex" >
        <a href="{{ URL::to('/mail-latest') }}"><button class="btn btn-outline-primary my-3 mx-2" style="width: 100px"><i class="bi bi-arrow-up-circle"></i> Latest</button></a>
        <a href="{{ URL::to('/mail-old') }}"><button class="btn btn-primary my-3" style="width: 100px">Old <i class="bi bi-arrow-down-circle"></i></button></a>
        <button class="btn btn-circle btn-danger text-white ms-auto my-3" style="width: 180px" id="deleteSelectedRow"
            onclick="return confirm(&quot; Mail akan dihapus? &quot;)">
            <i class="bi bi-trash"></i><span class="fw-semibold"> Delete Selected</span>
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                            <div>

                                <!-- Mail list-->
                                <div class="table-responsive">
                                    <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="col-sm-12 col-md-12">
                                                        <ul class="list-inline dl mb-0 float-left float-md-right d-flex">
                                                            <li class="list-inline-item text-info">
                                                                <button class="btn btn-circle btn-outline-success"
                                                                style="width: 80px"
                                                                    class="check-box" id="selectAll">
                                                                    <i class="fa fa-check"></i> All
                                                                </button>
                                                            </li>
                                                            <li class="list-item text-danger">

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mails as $mail)
                                                <!-- row -->
                                                <tr id="mid{{ $mail->id }}">
                                                    <!-- label -->
                                                    <td class="text-center">
                                                        <input type="checkbox" name="ids" value="{{ $mail->id }}"
                                                            id="">
                                                    </td>
                                                    <td>
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </td>
                                                    <td style="width: 15%">
                                                        <span class="mb-0 text-muted">{{ $mail->name }}</span>
                                                    </td>
                                                    <!-- Message -->
                                                    <td>
                                                        <a class="link" href="{{ url('/mail/' . $mail->id) }}">
                                                            <span
                                                                class="description text-dark">{{ $mail->description }}</span>
                                                        </a>
                                                    </td>
                                                    <!-- Attachment -->
                                                    <td><i class="fa fa-paperclip text-muted"></i></td>
                                                    <!-- Time -->
                                                    <td class="text-muted">{{ $mail->date }}</td>
                                                    <td>
                                                        <form action="{{ url('/mail' . '/' . $mail->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                onclick="return confirm(&quot;Mail Akan Dihapus?&quot;)"
                                                                class="card-link btn btn-danger my-2" id="del-btn"><i
                                                                    class="bi bi-trash"></i></button>
                                                        </form>
                                                        <a href="{{ url('/mail/' . $mail->id) }}"
                                                            class="card-link btn btn-outline-dark"><i
                                                                class="bi bi-eye-fill"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- row -->
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#selectAll').click(function(e) {
            $(this).toggleClass('clicked');
            $(this).closest('table').find('input[type="checkbox"]').prop('checked', $(this).hasClass('clicked'))
        });

        $(function(e) {

            $("#deleteSelectedRow").click(function(e) {
                e.preventDefault();
                var allids = [];

                $("input:checkbox[name=ids]:checked").each(function() {
                    allids.push($(this).val());
                });

                $.ajax({
                    url: "{{ route('mail.deleteSelected') }}",
                    type: "DELETE",
                    data: {
                        _token: $("input[name=_token]").val(),
                        ids: allids
                    },
                    success: function(response) {
                        $.each(allids, function(key, val) {
                            $("#mid" + val).remove();
                        })
                    }
                });
            });
        });
    </script>

@stop
