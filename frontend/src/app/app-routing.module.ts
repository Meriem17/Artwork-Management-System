import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { NavAdminComponent } from './nav-admin/nav-admin.component';
import { ArtisteMangementComponent } from './artiste-mangement/artiste-mangement.component';
import { ImageMangementComponent } from './image-mangement/image-mangement.component';
const routes: Routes = [
  {
    path: '',
    component: NavAdminComponent,
    children: [
      {
        path: 'artisteMangement',
        component: ArtisteMangementComponent,
    
      },
      {
        path: 'image',
        component: ImageMangementComponent,
    
      },
    ]

  },
 

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})


export class AppRoutingModule { }
