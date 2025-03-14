<?php
$includeAdminController = new includeAdminController();
$includeAdminController->header();
$includeAdminController->navbar();
?>
<div class="container-fluid animate__animated animate__fadeIn">
   <div class="card">
      <div class="card-header">
         <div class="h4"> Announcements </div>
      </div>
      <div class="card-body">
         <div class="form-group">
            <a href="#" data-toggle="modal" data-target="#announcement" class="btn btn-primary announcement-add">
               <i class="fas fa-plus"></i>
               add Announce
            </a>
         </div>
         <div class="table-responsive">
            <table class="table table-bordered table-sm text-dark">
               <thead>
                  <tr>
                     <th class="text-center"> Announcement </th>
                     <th class="text-center"> Actions </th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  $announceModel = new announceModel();
                  foreach ($announceModel->read_announce() as $row) { ?>
                     <tr>
                        <td class="align-middle"><?= $row['announce'] ?> </td>
                        <td class="align-middle col-sm-2">
                           <div class="d-flex justify-content-center">
                              <a href="#" title="Edit record." data-target="#announcement" idAnn="<?= $row['id'] ?>" Ann="<?= $row['announce'] ?>" data-toggle="modal" class="btn btn-primary btn-sm announcement-edit">
                                 <i class="fas fa-edit"></i>
                              </a>
                           </div>
                        </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
      <div class="card-footer">

      </div>
   </div>
</div>

<div class="modal fade" id="announcement" data-keybord="false" data-backdrop="static">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">
         <div class="modal-header">
            <div class="h4 text-primary text-gray-900 text-uppercase font-weight-bold">
               <i class="fas fa-bell text-warning"></i>
               announcement
               <span class="fas fa-question-circle text-xs text-info position-absolute ml-1"
                  role="button" style="top:20px;" title="Announcement.">
               </span>
            </div>
            <button onclick="location.reload()" class="close" type="button">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="?route=announce" method="post">
               <input type="hidden" id="id-ann" name="id-ann">
               <div class="form-group">
                  <textarea name="AnnounceHere" id="AnnounceHere" cols="30" rows="10" placeholder="Announce Here!" class="form-control"></textarea>
               </div>
               <div class="form-group">
                  <div class="d-flex justify-content-end align-items-end">
                     <button type="submit" class="btn btn-primary" name="add-ann" id="add-ann" disabled> <i class="fas fa-paper-plane"></i> Add </button>
                     <button type="submit" class="btn btn-primary" name="edit-ann" id="edit-ann" disabled> <i class="fas fa-paper-plane"></i> Edit </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<?php
$includeAdminController->footer();
$includeAdminController->script();
?>
<script>
   tinymce.init({
      selector: '#AnnounceHere',
      plugins: [
         // Core editing features
         'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
         // Your account includes a free trial of TinyMCE premium features
         // Try the most popular premium features until Mar 27, 2025:
         'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
      ],
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [{
            value: 'First.Name',
            title: 'First Name'
         },
         {
            value: 'Email',
            title: 'Email'
         },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
      setup: function(editor) {
         editor.on('input', function() {
            emptyInputs(); // Call validation on input
         });
         editor.on('change', function() {
            emptyInputs(); // Call validation on change
         });
      }
   });

   function emptyInputs() {
      const AnnounceHere = tinymce.get('AnnounceHere').getContent().trim();
      const isValid = AnnounceHere.length > 10;

      $('#add-ann').prop('disabled', !isValid);
      $('#edit-ann').prop('disabled', !isValid);
   }

   $('.announcement-add').click(function() {
      $('#edit-ann').addClass('d-none');
      $('#add-ann').removeClass('d-none').prop('disabled', true);
      $('#id-ann').val('');

      if (tinymce.get('AnnounceHere')) {
         tinymce.get('AnnounceHere').setContent('');
      }
   });

   $('.announcement-edit').on('click', function() {
      $('#add-ann').addClass('d-none');
      $('#edit-ann').removeClass('d-none');
      $('#id-ann').val($(this).attr('idAnn'));

      if (tinymce.get('AnnounceHere')) {
         tinymce.get('AnnounceHere').setContent($(this).attr('Ann'));
      }
      emptyInputs(); // Run validation
   });
</script>