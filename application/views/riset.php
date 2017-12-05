<div class="courses_section courses-fullwidth">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 courses_right">
                <div class="courses_right_inner">

                    <div class="search_section">
                        <form action="#" method="post">
                            <ul>
                                <li>
                                    <input type="text" id="myInput" onkeyup="myFunction()" name="course-name" class="form-control" placeholder="Pencarian...">
                                </li>
                            </ul>
                        </form>
                    </div><!--End search_section-->

                    <div class="courses table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead style="background-color: #C10E0E;">
                                <tr>
                                <th>Judul Riset</th>
                                <th>Bidang</th>
                                <th>Penulis</th>
                                <th>Tahun</th>
                                <th>Download</th>
                                <th>Video</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($riset as $i){ ?>
                                <tr>
                                    <td><?php echo $i['riset_judul']; ?></td>
                                    <td><?php echo $i['riset_bidang']; ?></td>
                                    <td><?php echo $i['riset_penulis']; ?></td>
                                    <td><?php echo $i['riset_tahun']; ?></td>
                                    <td><a href="<?php echo base_url(); ?>uploads/riset/files/<?php echo $i['riset_file']; ?>"><i class="fa fa-download" aria-hidden="true"> Download</i></a></td>
                                    <td><a href="<?php echo base_url(); ?>uploads/riset/videos/<?php echo $i['riset_video']; ?>"><i class="fa fa-download" aria-hidden="true"> Download</i></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            </table>
                    </div><!--End courses-->
<!--                     
                    <ul class="pagination">
                        <li>
                            <a aria-label="Previous" href="#">
                            <span aria-hidden="true">Previous</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">38</a></li>
                        <li>
                            <a aria-label="Next" href="#">
                            <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul> -->

                </div><!-- end courses_right_inner -->
            </div><!-- end courses_right -->

        </div><!-- end row -->
    </div><!-- end container -->
</div><!--end post section-->

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>