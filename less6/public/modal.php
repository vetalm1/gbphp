
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form class="form-inline my-2 my-lg-0" action="modal_controller.php" method="post">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Добавить студента</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <input name = "name" class="form-control mr-sm-2" type="text" placeholder="Имя" aria-label="Search">
          <input name = "age" class="form-control mr-sm-2" type="text" placeholder="Возраст" aria-label="Search">
          <input name = "lang" class="form-control mr-sm-2" type="text" placeholder="Язык" aria-label="Search">
         </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Добавить</button>
        </div>

      </form>

    </div>
  </div>
</div>
