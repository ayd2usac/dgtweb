using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace ApiJWT.Models
{
    public class Complaints
    {
        [Key]
        [DatabaseGenerated(DatabaseGeneratedOption.Identity)]
        public int Id { get; set; }
        
        
        public int? UserId { get; set; }           
        public Users User { get; set; }

        
        [Required]
        public string Tipo { get; set; }

        [Required]
        public string Municipio { get; set; }

        [Required]
        [MaxLength(500)]
        public int  Zona { get; set; }

        [Required]
        [MaxLength(500)]
        public string Description { get; set; }

        [Required(AllowEmptyStrings = false)]
        public DateTime? PostDate { get; set; }


        public List<Complaints> PorFecha { get; set; }

        public List<Users> porUsuario { get; set; }

    }
}
