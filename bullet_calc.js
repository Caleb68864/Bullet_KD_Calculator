function taylorKO(bWeight, bDiameter, bFPS){
    return (bWeight * bDiameter * bFPS)/7000;
}

function footPound(bWeight, bFPS){
    return .5 * bWeight * (bFPS * bFPS) * (1/(7000 * 32.163));
}