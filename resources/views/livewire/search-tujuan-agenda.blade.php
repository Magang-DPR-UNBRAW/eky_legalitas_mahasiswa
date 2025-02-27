


<button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TujuanAgendaModal">...
</button>

<!-- Modal -->
<div class="modal fade" id="TujuanAgendaModal" tabindex="-1" aria-labelledby="TujuanAgendaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="TujuanAgendaModalLabel">Daftar Tujuan Agenda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <table id="tableGrid3">
                <thead>
                    <th>Tujuan Agenda</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach($this->getTujuanAgendas() as $TujuanAgenda)
                    <tr>
                        <td>{{ $TujuanAgenda->tujuan_agenda }}</td>
                        <td>{{ $TujuanAgenda->deskripsi }}</td>
                       
                        <td>
                            <button type="button" class="btn btn-primary" onclick="selectFieldsTujuanAgenda('{{ $TujuanAgenda->id }}', '{{ $TujuanAgenda->tujuan_agenda }}')"><i class="ri-navigation-fill"></i> Pilih</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll("button");

            buttons.forEach(button => {
                button.type = "button";
            });
        });
</script>