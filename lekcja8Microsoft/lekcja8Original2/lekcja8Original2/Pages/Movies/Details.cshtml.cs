using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.EntityFrameworkCore;
using lekcja8Original2.Data;
using lekcja8Original2.Models;

namespace lekcja8Original2.Pages.Movies
{
    public class DetailsModel : PageModel
    {
        private readonly lekcja8Original2.Data.lekcja8Original2Context _context;

        public DetailsModel(lekcja8Original2.Data.lekcja8Original2Context context)
        {
            _context = context;
        }

        public Movie Movie { get; set; }

        public async Task<IActionResult> OnGetAsync(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            Movie = await _context.Movie.FirstOrDefaultAsync(m => m.ID == id);

            if (Movie == null)
            {
                return NotFound();
            }
            return Page();
        }
    }
}
