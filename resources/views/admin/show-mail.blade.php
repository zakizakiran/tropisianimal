<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAILBOX</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .button-container {
            display: flex;
            justify-content: center;
        }

        #btn-reply:hover {
            background: transparent;
            color: #0D6EFD;
        }

        #btn-exit:hover {
            background: none;
            color: #DC3545;
        }
    </style>
</head>
<div class="card" style="border-radius: 0">
    <div class="card-header fw-bold fs-4">
        <div class="container-header-title">
        <span style="">Mailbox</span>
        </div>

            <a href="/mail"><button class="btn btn-danger d-flex ms-auto" style="margin-top: -2rem" id="btn-exit"><i
                class="bi bi-x-circle"></i></button></a>

    </div>
    <div class="card" style="border-radius: 0">
        <div class="card-body">
            <p class="card-text">From : {{ $mails->name }} </p>
            <p class="card-text">Email : {{ $mails->email }} </p>
            <p class="card-text">Date : {{ $mails->date }}</p>
            <p class="card-title mt-5 fw-bolder">Subject :</p>
            <h4 class="my-4">{{ $mails->subject }}</h4>
            <p class="card-text fw-semibold">Description :</p>
            <div class="text-desc">
                {{ $mails->description }}
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="button-container">
            <a href="mailto: {{ $mails->email }}"><button class="btn btn-primary" id="btn-reply">Reply <i
                        class="bi bi-reply-all-fill"></i></i></button></a>
        </div>
    </div>
</div>
