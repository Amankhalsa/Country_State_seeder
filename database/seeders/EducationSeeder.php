<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eds =[
            ['name' => "B.E / B.Tech"],
            ['name' => "M.E / M.Tech"],
            ['name' => "M.S Engineering"],
            ['name' => "M.S Engineering"],
            ['name' => "B.Eng (Hons)"],
            ['name' => "M.Eng (Hons)"],
            ['name' => "Engineering Diploma"],
            ['name' => "AE"],
            ['name' => "AET"],
            ['name' => "educationlevel-optgroup--ARTS / DESIGN-"],
            ['name' => "B.A"],
            ['name' => "B.Ed"],
            ['name' => "BJMC"],
            ['name' => "B.Des"],
            ['name' => "BMM"],
            ['name' => "MFA"],
            ['name' => "M.Ed"],
            ['name' => "M.A"],
            ['name' => "MSW"],
            ['name' => "MJMC"],
            ['name' => "MM.ArchSW"],
            ['name' => "BA (Hons)"],
            ['name' => "B.Arch (Hons)"],
            ['name' => "DFA"],
            ['name' => "D.Ed"],
            ['name' => "D.Arch"],
            ['name' => "AA"],
            ['name' => "AFA"],
            ['name' => "educationlevel-optgroup--FINANCE / COMMERCE-"],
            ['name' => "B.Com"],
            ['name' => "CA / CPA"],
            ['name' => "CFA"],
            ['name' => "CS"],
            ['name' => "M.Com"],
            ['name' => "AA"],
            ['name' =>'MSc / MFin / MS'],
            ['name' =>' BCom (Hons)'],
            ['name' =>'PGD Finance'],
            ['name' =>' BCA'],
            ['name' =>'B.IT'],
            ['name' =>'BCS'],
            ['name' =>' BA Computer Science'],
            ['name' =>'MCA'],
            ['name' =>' PGDCA'],
            ['name' =>'IT Diploma'],
            ['name' =>'ADIT'],
            ['name' =>'B.Sc'],
            ['name' =>'M.Sc'],
            ['name' =>'BSc (Hons)'],
            ['name' =>'DipSc'],
            ['name' =>'AS'],
            ['name' =>'AAS'],
            ['name' =>'MBBS'],
            ['name' =>'BDS'],
            ['name' =>'BPT'],
            ['name' =>'BAMS'],
            ['name' =>'BHMS'] ,
            ['name' =>'B.Pharma'],
            ['name' =>'BVSc'],
            ['name' =>'BSN / BScN'],
            ['name' =>'MDS'],
            ['name' =>'MCh'],
            ['name' =>'M.D'],
            ['name' =>'M.S Medicine'],
            ['name' =>'MPT '] ,  
            ['name' =>'M.Pharma'],
            ['name' =>'MVSc'],
            ['name' =>'MMed'],
            ['name' =>'PGD Medicine'],
            ['name' =>'ADN'],
            ['name' =>'BBA'],
            ['name' =>'BHM'],
            ['name' =>'BBM'],
            ['name' =>'MBA'],
            ['name' =>'PGDM'],
            ['name' =>'ABA'],
            ['name' =>'ADBus'],
            ['name' =>'BL / LLB'],
            ['name' =>'ML / LLM'],
            ['name' =>'LLB (Hons)'],
            ['name' =>'ALA'],
            ['name' =>'Ph.D'],
            ['name' =>'M.Phil'],
            ['name' =>'Bachelor'],
            ['name' =>'Master'],
            ['name' =>'Diploma'],
            ['name' =>'Honours'],
            ['name' =>'Doctorate'],
            ['name' =>'Associate'],
            ['name' =>'High school'],
            ['name' =>'Less than high school'],
        ];
        foreach ($eds as $key => $ed) {
            Education::create($ed);
        }
    }
}
    
   