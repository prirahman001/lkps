<?php
/**
 *
 */
// require_once 'dompdf/autoload.inc.php';
// use Dompdf\Dompdf;

class Kerjasama_pdf extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("general_model");
    $this->load->model("Gpm_model");
      $this->load->helper('tanggal');
      $this->load->library('pdf');
      // if ($this->session->userdata('level_login')!= 1) {
      //   show_404();
      // }
    // if ($this->session->userdata('is_login') != 1) {
    //   echo "<script>alert('Silahkan Login Terlebih Dahulu');
    //   window.location.href='".base_url('login')."';
    //   </script>";
    //
    // }

  }

  protected function ci()
  {
      return get_instance();
  }

  public function index(){
      // $data_prodi = $this->general_model->getData('prodi_tabel', 'id_prodi', 'asc');
      $data['list_data']=$this->general_model->getKerjasamaPdf('kerjasama_tabel','prodi_id',1,'created_at','DESC')->result();

      // $no = 1;
      // foreach ($data_prodi as $key) {
        // $pdf_kerjasama[] = $this->general_model->getwhere('kerjasama_tabel','prodi_id',$key->id_prodi,'created_at','DESC')->result();

        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "Kerjasama.pdf";
        $this->pdf->load_view('Kerjasama/Kerjasama_pdf', $data);
      // }
    }
  }
?>
