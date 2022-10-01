<div id="feedback" class="feedback-container contaienr-fluid">
           <div class="container">
           <div class="row session-title">
               <h2>Feedbacks</h2>

           </div>
           @foreach($feedback as $data)
            <div class="row">
                 
                    <div class="bkjiu">
                        <br>
                        <hr>
                     <h4>{{$data->Name}}</h4>
                     <p>{{$data->Feedback}}</p>

                     <br>
                     </div>
                 </div>
                 @endforeach
                </div>
                <br>
                <br>
            </div>