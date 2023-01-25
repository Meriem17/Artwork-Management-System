import { Component, OnInit } from '@angular/core';
import { ArtisteService } from '../services/artiste.service';

@Component({
  selector: 'app-artiste-mangement',
  templateUrl: './artiste-mangement.component.html',
  styleUrls: ['./artiste-mangement.component.css']
})
export class ArtisteMangementComponent {
  constructor(private artisteService: ArtisteService) { }
  artistes:any;
  page = 1;
  count = 0;
  pageSize = 5;
  pageSizes = [5, 10, 15, 20];
  currentIndex = -1;
  ngOnInit(): void {
    
         this.artisteService.getArtistes().subscribe(
         (result) =>{console.warn("result"),
                        this.artistes=result});
  
  
    }
    handlePageChange(event: number)
{
    this.page = event;
}


handlePageSizeChange(event: any)
{
    this.pageSize = event.target.value;
    this.page = 1;
}

}
