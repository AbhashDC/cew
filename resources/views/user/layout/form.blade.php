<form action="{{route('response')}}" method="POST">
    @csrf
    <label>
        <h3><p class="font-weight-bold padding-top-13">SEND US A MESSAGE</p></h3>
        <p class="font-weight-bold">Feel free to drop us a line below.</p></label>
    <div class="form-group">

        <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
               placeholder="Name.." required>
    </div>
    <div class="form-group">

        <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
               placeholder="Email.." required>
    </div>
    <div class="form-group">

        <input type="number" name="number" class="form-control" id="exampleFormControlInput3"
               placeholder="Phone Number.." required>
    </div>
    <div class="form-group">

                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"
                                  placeholder="Your message or complaints"></textarea>
    </div>
    <div class="form-group">

        <input type="submit" name="submit" class="form-control btn btn-logo-color color-white" value="Submit">
    </div>
</form>
