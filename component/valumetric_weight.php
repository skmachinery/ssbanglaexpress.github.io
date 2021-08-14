<!-- valumetric weight -->
<div class="container-fluid p-lg-5">
    <div class="row mx-lg-5">
        <div class="col-md-6">
            <form>
                <h4>Valuemetric Weight</h4>
                <div class="input-group py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-light">Length</span>
                    </div>
                    <input class="form-control" id="length" type="number" placeholder="Length in cm">
                </div>
                <div class="input-group py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-light">Width</span>
                    </div>
                    <input class="form-control" id="width" type="number" placeholder="Width in cm">
                </div>
                <div class="input-group py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-light">Height</span>
                    </div>
                    <input class="form-control" id="height" type="number" placeholder="Height in cm">
                </div>
                <div class="py-2">
                    <button class="btn btn-danger" type="button" id="calcUlate">Calculate</button>
                </div>
            </form>
            <div>
                <h4>Valuemetric weight in kg: <span id="outPut"></span></h4>
            </div>
        </div>
        <div class="col">
            <div>
                <img class="img-fluid" src="/image/valuemetric-weight.png" alt="">
            </div>
        </div>
    </div>
</div>
<script>
//valuemetric weight
var bTn = document.getElementById("calcUlate");
bTn.onclick = function calculate() {
    var length = document.getElementById("length").value;
    var width = document.getElementById("width").value;
    var height = document.getElementById("height").value;

    var dimension = length * width * height;
    var kg = dimension / 5000;
    /* 
    var x = 5;
    var y = 6;
    var z = 10;
    var a = x * y * z; 
    */
    var output = document.getElementById("outPut");
    output.innerHTML = `${kg} kg`;
}
</script>