<html>
<body>
    <button onclick="myfun">load</button>
</body>
class practice extends Controller
{

    function myfun() {

        $query = $this->db->query("SELECT * from tbltransaction");
    
        if($query->num_rows() > 0 ) {
            return true;
        }
        else {
            return false;
        }
    }
}
</html>