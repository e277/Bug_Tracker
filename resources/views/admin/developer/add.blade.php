<form action="/view-dev/{id}" method="post">
   <input type="hidden" name="id">
   <input type="text" name="" id="">
   <select name="name" id="">
      @foreach ($collection as $item)
         <option>{{  }}</option>
      @endforeach
   </select>
</form>