@extends('layouts.user.app')
@section('user_content')

    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Project</a></li>
              <li class="breadcrumb-item active" aria-current="page">pmt > task</li>
            </ol>
          </nav>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Index</th>
                <th scope="col">Task</th>
                <th scope="col">Date</th>
                <th scope="col">Aleart</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @if(isset($tasks))
                @foreach ($tasks as $item)


                <?php
                        $str = $item->user_id;
                        $ex =  explode(" ",$str);

                        ?>
                @foreach ($ex as $e)
                    @if ($e==Auth::id())
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->start_date }} to {{ $item->end_dete }}</td>
                        <td>
<<<<<<< HEAD
                          @php
                              $currentDate = date('Y-m-d');
                              
                              $startDate = $item->start_date;
                              $endDate = $item->end_dete; 
                              if (($currentDate >= $startDate) && ($currentDate <= $endDate)){   
                                echo $endDate;
                              }else{    
                                echo '
                                  <p style="color:red">Task Out Of Date</p>
                                ';  
                              }
                          @endphp
                        </td>
                        <td>
=======
>>>>>>> 016c3dd18942721988d49eedb6c1ddeb96104eb6
                            @if($item->status == 0)
                            <a href="{{ url('user/task/status', $item->id) }}" class="btn btn-danger  btn-sm" style="border-radius: 50px; height:20px; line-height:6px">Progress</a>
                            @else
                            <a href="{{ url('user/task/status', $item->id) }}" class="btn btn-success  btn-sm" style="border-radius: 50px; height:20px; line-height:6px">Done</a>
                            @endif

                        </td>
                        <td>
                            <a href="{{ url('user/task/detail',$item->id) }}" class="btn btn-sm btn-primary">View</a>
                        </td>
                    </tr>
                    @endif

                @endforeach

                @endforeach
              @endif
            </tbody>
          </table>
    </section>

@endsection

{{--
conditions[
    1-student can assign 1 project not allowed multple project
    2-when create project select student if you not select student not show her profile task
    3-task create must be student assign seletect otherwais not get her profile the task
] --}}
