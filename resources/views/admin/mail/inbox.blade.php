@extends('layouts.admin')
@section('title')
Mail
@endsection

@section('content')

	<div class="mail-w3agile">
        <!-- page start-->
        <div class="row">

        @include ('admin.mail.mail_side_bar')


            <div class="col-sm-9 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case">Inbox ({{ $total_contact }})
                        <form action="" class="pull-right mail-src-position">
                            <div class="input-append">
                                <input type="text" class="form-control " placeholder="Search Mail">
                            </div>
                        </form>
                       </h4>
                    </header>
                    <div class="panel-body minimal">
                        <div class="mail-option">
                            <div class="chk-all">
                                <div class="pull-left mail-checkbox ">
                                    <input type="checkbox" class="">
                                </div>

                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="" class="btn mini all">
                                        All
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href=""> None</a></li>
                                        <li><a href=""> Read</a></li>
                                        <li><a href=""> Unread</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-toggle="dropdown" href="" class="btn mini blue">
                                    More
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href=""><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href=""><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a data-toggle="dropdown" href="" class="btn mini blue">
                                    Move to
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href=""><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href=""><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div>

                            <ul class="pull-right">
                                
                            {{ $contact->links() }}
                            </ul>
                        </div>
                        <div class="table-inbox-wrap" style="min-height: 730px;border-top: 10px solid #f0bcb4;">
                            <table class="table table-inbox table-hover">

                        <tbody>

                            @unless(count($contact))
                            <tr class="unread">
                                <td class="inbox-small-cells">
                                </td>
                                <td class="inbox-small-cells">No message received yet!</td>
                                <td class="view-message  dont-show"><a href=""></a></td>
                                <td class="view-message "><a href=""></a></td>
                                <td class="view-message  inbox-small-cells"></td>
                                <td class="view-message  text-right"></td>
                            </tr>

                            @endif

                           @foreach($contact as $message)


                                @if($message->status == 0)
                                    <tr class="unread">
                                @else 
                                    <tr class="">
                                @endif
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                <td class="view-message  dont-show"><a href="">{{ $message->guest_name }}</a></td>
                                <td class="view-message "><a href="{{ url('/view/'. $message->id) }}"  >{{ substr( $message->message, 0, 100 ) }}</a></td>
                                <td class="view-message "><a onclick="event.preventDefault();
                              document.getElementById('delete-msg' + {{ $message->id }}).submit();"><i class="fa fa-trash-o"></i></a></td>
                                <td class="view-message  inbox-small-cells">{{ $message->created_at->diffForHumans() }}</td>
                                <td class="view-message  text-right">{{ $message->created_at->format('m/d/Y h:i:s A') }}</td>

                                 <form id="delete-msg{{ $message->id }}" action="{{ url('/message/'.$message->id) }}" method="POST" style="display: none;">
                                  {{ method_field('DELETE') }}
                                              {{ csrf_field() }}
                              </form>
                            </tr>

                           @endforeach


                        </tbody>
                        </table>

                        </div>
                    </div>

                </section>
            </div>
        </div>

        <!-- page end-->
@endsection