import { Component, OnInit } from '@angular/core';
import { RouteService } from 'src/app/services/route-service/route.service';
import { DomSanitizer } from '@angular/platform-browser';

@Component({
  selector: 'app-page-finder',
  templateUrl: './page-finder.component.html',
  styleUrls: ['./page-finder.component.scss']
})
export class PageFinderComponent implements OnInit {

  public pagina: any = {};

  constructor(public routes: RouteService, private sanitizer: DomSanitizer) { }

  ngOnInit() {
    this.routes.getRoute(window.location.pathname).subscribe(ret => {
      this.pagina = ret; 
      this.pagina.content = this.sanitizer.bypassSecurityTrustHtml(this.pagina.content);
    }, error => {
      console.log(error);
    }); 
  }

}
