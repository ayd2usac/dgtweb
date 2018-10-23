using ApiJWT.Models;
using Microsoft.EntityFrameworkCore;

namespace ApiJWT
{
    public class APIDBContext: DbContext
    {
        public APIDBContext(DbContextOptions<APIDBContext> options): base(options)
        {
        }

        public DbSet<Users> Users { get; set; }
        public DbSet<Complaints> Posts { get; set; }
        public DbSet<Users> Hashtags { get; set; }        
     
    }
}
