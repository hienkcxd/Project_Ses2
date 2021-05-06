

<form action="">
<input type="text" name="test" value="1233">
    <select name="districts" id="districts">
        {{--                    @foreach($districtList as $name)--}}
        <option value="Quận 1">Quận 1</option>
        <option value="Quận 2">Quận 2</option>
        <option value="Quận 3">Quận 3</option>
        {{--                    @endforeach--}}
    </select>
    <button type="submit" onclick="click()">ok</button>
</form>
<script>
    function click(){
        var event:event;
        event.preventDefault();
        var demo = document.querySelector("option:checked").value;
        document.getElementById('print').innerHTML = demo;
    }
</script>
@dd($districtName)
