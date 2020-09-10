using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using lekcja8Original2.Models;

namespace lekcja8Original2.Data
{
    public class lekcja8Original2Context : DbContext
    {
        public lekcja8Original2Context (DbContextOptions<lekcja8Original2Context> options)
            : base(options)
        {
        }

        public DbSet<lekcja8Original2.Models.Movie> Movie { get; set; }
    }
}
