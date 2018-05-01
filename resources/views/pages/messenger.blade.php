@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')
    <div class="page-title">
        <div class="container">
            <h1>Mesaj Kutusu</h1>
        </div>
        <!--end container-->
    </div>
@endsection



@section('content')
    <section class="content">
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-4">
                        <!--============ Section Title===========================================================-->
                        <div class="section-title clearfix">
                            <h3>Kişiler</h3>
                        </div>
                        <div id="messaging__chat-list" class="messaging__box">
                            <div class="messaging__header">

                            </div>
                            <div class="messaging__content">
                                <ul class="messaging__persons-list">

                                   @foreach($message_data as $one)
                                    <li>
                                        <a href="javascript:void(0)" id="mesaj-{{$one->id}}" class="messaging__person" onclick="showMessage({{$one->id}});">

                                            <figure class="content">
                                                <h5>{{$one->name}}</h5>

                                                <small>{{$one->updated_at}}</small>
                                            </figure>
                                            <figure class="messaging__image-person" data-background-image="{{$one->logo}}"></figure>
                                        </a>
                                        <!--messaging__person-->
                                    </li>
                                    @endforeach
                                </ul>
                                <!--end messaging__persons-list-->
                            </div>
                            <!--messaging__content-->
                        </div>
                        <!--end section-title-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-9 col-lg-9 col-xl-8">
                        <!--============ Section Title===========================================================-->
                        <div class="section-title clearfix">
                            <h3>Mesajlar</h3>
                        </div>
                        <!--end section-title-->
                        <div id="messaging__chat-window" class="messaging__box">
                            <div class="messaging__header">
                                <div class="float-left flex-row-reverse messaging__person">
                                    <h5 class="font-weight-bold" id="kisi"></h5>

                                </div>
                                <div class="float-right messaging__person">
                                    <h5 class="mr-4">Sen</h5>

                                </div>
                            </div>
                            <div class="messaging__content" data-background-color="rgba(0,0,0,.05)">
                                <div class="messaging__main-chat">
                                    <div class="job-listings-sec no-border" id="ajaxbas">




                                    </div>
                                </div>
                            </div>
                            <div class="messaging__footer">

                                    <div class="input-group">
                                        <input type="text" class="form-control mr-4" id="message" placeholder="Mesajınız">
                                        <input type="hidden" class="form-control mr-4" id="message_id" >
                                        <input type="hidden" class="form-control mr-4" id="client_id" value="{{Auth::user()->id}}">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" id="sendbutton" type="submit" onclick="sendMessage()">Gönder <i class="fa fa-send ml-3"></i></button>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-md-9-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    </section>
    <!--end content-->
@endsection

@section('page_level_js')
<script>


    function showMessage(id){
        $('#message_id').val(id);
        $.ajax({
            method:"POST",
            url:"/getmessage",
            data:"data="+id,
            success:function(return_value){
                the_info = JSON.parse(return_value);

                var dasd="";


                    $('#ajaxbas').html(dasd);

                    for (var i in the_info) {
                        if( {{ Auth::user()->id }}== the_info[i].created_by){
                            dasd = dasd + "<div class=\"messaging__main-chat__bubble user\">\n" +
                                "                                            <p>\n" +
                                "                       "+the_info[i].content +"                         <small>"+the_info[i].time+"</small>\n" +
                                "                                            </p>\n" +
                                "                                        </div>"
                        }else{
                            dasd = dasd + "<div class=\"messaging__main-chat__bubble\">\n" +
                                "                                            <p>\n" +
                                "                       "+the_info[i].content +"                         <small>"+the_info[i].time+"</small>\n" +
                                "                                            </p>\n" +
                                "                                        </div>"
                        }


                    }

                    $('#ajaxbas').html(dasd);
                    $('#kisi').html(the_info[1].name);






            }
        });
    }


    function sendMessage(){


        the_obj = {
            message:$("#message").val(),
            message_id:$("#message_id").val(),
            client_id:$("#client_id").val(),
            type:'ajax',

        };
        var asd="#mesaj-"+$("#message_id").val();

        $.ajax({
            method:"POST",
            url:"/mesaj-gonder",
            data:"data="+JSON.stringify(the_obj),
            success:function(return_value){



                $(asd).click();
                $("#message").val(" ");



            }
        });
    }
    $(document).keypress(function(e) {
        if(e.which == 13) {
            $("#sendbutton").click();
        }
    });

</script>


@endsection

@section('page_document_ready')


@endsection