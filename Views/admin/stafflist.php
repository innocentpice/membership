<main>
    <div style="padding:1.5em;">
      <h5 style="color:white;">รายชื่อกรรมการ</h5>
      <hr>
      <!--<div class="input-field">-->
      <!--  <input type="text" id="userlist_search" class="autocomplete">-->
      <!--  <label for="userlist_search">Search</label>-->
      <!--</div>-->
      <ul id="userlist" class="collection" style="border:none;">
        <div id="userItem">
        </div>
        <div id="userLoad" class="hidden">
          <li class="collection-item row">
            <div class="progress" style="width:50%;">
                <div class="indeterminate"></div>
            </div>
            <div class="progress" style="width:80%;">
                <div class="indeterminate"></div>
            </div>
            <div class="progress" style="width:20%;">
                <div class="indeterminate"></div>
            </div>
          </li>
        </div>
      </ul>
    </div>
  </main>
  
  <div id="command_menu" class="modal bottom-sheet">
    <div class="modal-content row" style="padding:1em;margin:0px;">
      <div class="col s12 m6 center-align">
        <p id="edit_title" class="truncate text-flow"></p>
      </div>
      <div class="col s12 m6 center-align">
        <button id="printPDF_btn" class="waves-effect waves-light btn" style="margin:10px;"><i class="material-icons left">picture_as_pdf</i>PDF</button>
        <button id="cancelAdmin_btn" class="waves-effect waves-light btn" style="margin:10px;"><i class="material-icons left">delete_forever</i>ปลดออกจากกรรมการ</button>
      </div>
    </div>
  </div>