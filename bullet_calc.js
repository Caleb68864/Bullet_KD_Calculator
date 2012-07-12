function taylorKO(bWeight, bDiameter, bFPS){
    bweight = parseInt(bWeight);
    bDiameter = parseFloat(bDiameter);
    bFPS = parseInt(bFPS);
    return (bWeight * bDiameter * bFPS)/7000;
}

function footPound(bWeight, bFPS){
    bweight = parseInt(bWeight);
    bFPS = parseInt(bFPS);
    return (.5 * bWeight * (bFPS * bFPS)) * (1/(7000 * 32.163));
}