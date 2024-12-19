// TODO 3: Import data students dari folder data/students.js
// code here

// Membuat Class StudentController
class StudentController {
    index(req, res) {
      res.send("menampilkan semua student");
    }
  
    store(req, res) {
      res.send("menampilkan data student");
    }
  
    update(req, res) {
      res.send('mengedit student id ${id}');
    }
  
    destroy(req, res) {
     res.send('menghapus student id ${id}');
    }
  }
  
  // Membuat object StudentController
  const object = new StudentController();
  
  // Export object StudentController
  module.exports = object;