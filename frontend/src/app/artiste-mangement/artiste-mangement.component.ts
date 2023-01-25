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
  ngOnInit(): void {
    
         this.artisteService.getArtistes().subscribe(
         (result) =>{console.warn("result"),
                        this.artistes=result});
  
  
    }

}
